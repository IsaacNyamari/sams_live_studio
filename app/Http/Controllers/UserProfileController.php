<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        if ($request->hasFile('profile_image')) {
            $path = public_path($user->profile_image);
            if (file_exists($path) && ! is_dir($path)) {
                unlink($path);
            }
            $profileImagePath = $request->file('profile_image')->move('images/profile', $request->file('profile_image')->getClientOriginalName());
            $validatedData['profile_image'] = $profileImagePath;
        }
        
        if ($request->hasFile('cover_image')) {
            $cover_path = public_path($user->cover_image);
            if (file_exists($cover_path) && ! is_dir($cover_path)) {
                unlink($cover_path);
            }
            $coverImagePath = $request->file('cover_image')->move('images/cover', $request->file('cover_image')->getClientOriginalName());
            $validatedData['cover_image'] = $coverImagePath;
        }
        // Update the user's profile information
        $user->update($validatedData);

        return back()->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
}
