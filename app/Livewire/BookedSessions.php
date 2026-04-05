<?php

namespace App\Livewire;

use App\Events\BookingStatus;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class BookedSessions extends Component
{
    use WithSweetAlert;

    public $booking;

    public $user;

    #[Validate('required')]
    public $start;

    #[Validate('required')]
    public $end;

    public $bookings;

    #[On('bookingUpdated')]
    public function mount()
    {
        $this->user = Auth::user();
        $this->booking = $this->setSelectedBooking();
        if ($this->booking) {

            $this->start = Carbon::parse($this->booking->session_start)->format('H:i');
            $this->end = Carbon::parse($this->booking->session_end)->format('H:i');
        }
        // $this->bookings = $this->getBookings();
    }

    #[On('bookingUpdated')]
    #[On('refreshComponent')]
    public function render()
    {
        $bookings = $this->getBookings();

        return view('livewire.booked-sessions', compact('bookings'));
    }

    public function updateBooking(string $status, Booking $booking)
    {

        $booking->status = $status;
        $booking->update();
        $this->swalToast([
            'icon' => 'success',
            'position' => 'top-end',
            'title' => 'Success',
            'text' => "Booking has been '{$booking->status}'",
            'showConfirmButton' => false,
            'timer' => 3000,
            'timerProgressBar' => true,
        ]);
        $b = Str::ucfirst(Str::replaceFirst('_', ' ', $booking->service_type));
        $message = "Your booking ($b) has been $status";
        broadcast(new BookingStatus($booking->user, $status, $message));
        $this->dispatch('bookingUpdated');
    }

    public function setSelectedBooking(?Booking $booking = null)
    {
        $this->booking = $booking;
    }

    #[On('bookingUpdated')]
    #[On('refreshComponent')]
    public function getBookings()
    {
        if ($this->user->isClient()) {
            $bookings = $this->user->bookings()->orderBy('updated_at', 'asc')
                ->get();

            return view('livewire.booked-sessions', compact('bookings'));
        } else {
            $bookings = Booking::whereNotIn('user_id', [$this->user->id])
                ->orderBy('updated_at', 'asc')
                ->get();

            return view('livewire.booked-sessions', compact('bookings'));
        }
    }

    public function saveBookingTime()
    {
        $this->validate();
        $initialBookingStart = $this->booking->session_start;
        $initialBookingEnd = $this->booking->session_end;
        $newStartTime = Carbon::parse($initialBookingStart)->setTime(Carbon::parse($this->start)->format('H'), Carbon::parse($this->start)->format('i'));
        $newEndTime = Carbon::parse($initialBookingEnd)->setTime(Carbon::parse($this->end)->format('H'), Carbon::parse($this->end)->format('i'));
        $booking = Booking::findOrfail($this->booking->id);
        $booking->session_start = $newStartTime;
        $booking->session_end = $newEndTime;
        $booking->update();
        $this->dispatch('bookingUpdated');
    }
}
