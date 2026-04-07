<?php

namespace App\Http\Controllers;

use App\Mail\SendClientMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::role('client')->get();

        return view('users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        dd($data['email']);
        try {
            Mail::to($data['email'])->queue(new SendClientMail($data['name'], $data['subject'], $data['message'], $data['email']));

            return back()->with('success', 'Email queued successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to queue email: '.$e->getMessage());

            return back()->with('error', 'Failed to queue email. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('layouts.backend.user.index', compact('user'));
    }

    /**
     * Get user payments
     */
    public function userPayments(User $user)
    {
        $payments = $user->payments()
            ->paginate(5);

        return view('layouts.backend.user.payments', compact('payments'));
    }

    /**
     * Get user bookings
     */
    public function userBookings(User $user)
    {
        $bookings = $user->bookings()->get();

        return view('layouts.backend.user.bookings', compact('bookings'));
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
}
