<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index()
    {
        $users = $this->getAdminUsers();
        $bookings = $this->getAdminBookings();
        $payments = $this->Payments();

        return view('dashboard', compact('users', 'bookings', 'payments'));
    }

    public function bookings()
    {
        if ($this->user->isClient()) {
            $bookings = $this->user->bookings()->orderBy('updated_at', 'asc')
                ->get();

            return view('layouts.backend.bookings.index', compact('bookings'));
        } else {

            $bookings = Booking::whereNotIn('user_id', [$this->user->id])
                ->orderBy('updated_at', 'asc')
                ->get();

            return view('layouts.backend.bookings.index', compact('bookings'));
        }
    }

    public function clientBookings()
    {
        if ($this->user->isClient()) {
            $bookings = $this->user->bookings()->orderBy('updated_at', 'asc')
                ->get();

            return view('layouts.backend.bookings.index', compact('bookings'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sessions()
    {
        return view('layouts.backend.sessions.index');
    }

    /**
     * Get all users.
     */
    public function getAdminUsers()
    {
        return User::role('client')->get();
    }

    /**
     * get all bookings
     */
    public function getAdminBookings()
    {
        return Booking::whereNotIn('user_id', [$this->user->id])->get();
    }

    /**
     * Get all Payments
     */
    public function Payments()
    {
        if ($this->user->isAdmin()) {
            return Payment::all();
        } else {
            return $this->user->payments()->get();
        }
    }

    public function getAdminPayments()
    {
        $payments = Payment::paginate(5);

        return view('layouts.backend.payments.index', compact('payments'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function media()
    {
        return view('layouts.backend.media.index');
    }

    public function userPaymentApi()
    {
        $payments = DB::table('payments')
            ->where('payable_id', Auth::id()) // Adjust based on your schema
            ->selectRaw('DATE(created_at) as date, SUM(amount) as total, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return response()->json($payments);
    }
    public function userBookings()
    {
        $bookings = $this->user->bookings()->orderBy('updated_at', 'asc')
            ->get();
        return view('layouts.backend.bookings.index', compact('bookings'));
    }
    public function donateNow()
    {
        return view('layouts.backend.donate.index');
    }
}
