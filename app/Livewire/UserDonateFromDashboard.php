<?php

namespace App\Livewire;

use App\Events\RefreshUserPayments;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Livewire\Component;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class UserDonateFromDashboard extends Component
{
    use WithSweetAlert;

    public $amount;

    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.user-donate-from-dashboard');
    }

    public function makeDonation()
    {
        $this->dispatch('initializePayment', [
            'key' => env('PAYSTACK_PUBLIC_KEY'),
            'amount' => $this->amount * 100, // Paystack expects amount in kes
            'email' => $this->user->email,
        ]);

        // $this->swalToastSuccess([
        //     'position' => 'top-end',
        //     'title' => 'Thank you for your donation!',
        //     'icon' => 'success',
        //     'showConfirmButton' => false,
        //     'timer' => 3000,
        // ]);
    }

    #[On('paymentSuccess')]
    public function paymentSuccess($reference)
    {
        $response = $this->verifyPayment($reference);
        $admin = User::role('admin')->first();
        if ($response['data']['status'] === 'success') {
            // Handle successful payment here, e.g., save donation record to database

            $donation = $this->user->payments()->create([
                'payment_type' => 1,
                'reference' => $reference,
                'transaction_code' => $response['data']['receipt_number'],
                'amount' => $response['data']['amount'] / 100,
                'bank' => $response['data']['authorization']['bank'],
                'country_code' => $response['data']['authorization']['country_code'] ?? null,
                'brand' => $response['data']['authorization']['brand'] ?? null,
                'card_type' => $response['data']['authorization']['card_type'] ?? null,
                'phone' => $response['data']['authorization']['mobile_money_number'] ?? null,
            ]);
            $this->swalToastSuccess([
                'position' => 'top-end',
                'title' => 'Thank you for your donation!',
                'icon' => 'success',
                'showConfirmButton' => false,
                'timer' => 3000,
            ]);
            $this->reset();
            $amount = $response['data']['amount'] / 100;
            $message = Auth::user()->name.' has donated Kes. '.number_format($amount, 2).' '.$donation->created_at->diffForHumans();
            $this->dispatch('refreshUserPayments', ['message' => $message]);
            broadcast(new RefreshUserPayments($message, $admin));
        }
    }

    public function verifyPayment($reference)
    {
        return Http::withToken(env('PAYSTACK_SECRET_KEY'))->get("https://api.paystack.co/transaction/verify/{$reference}")->json();
    }
}
