<?php

namespace App\Http\Controllers;

use App\Models\LiveStream;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * About page
     */
    public function about()
    {
        return view('layouts.front-end.about');
    }
    /**
     * About page
     */
    public function live()
    {
        $streams = LiveStream::all();
        return view('layouts.front-end.live', compact('streams'));
    }

    /**
     * Services Page
     */
    public function services()
    {
        return view('layouts.front-end.service');
    }

    /**
     * contact page
     */
    public function contact()
    {
        return view("layouts.front-end.contact");
    }

    /**
     * Donate page.
     */
    public function donate()
    {
        return view('layouts.front-end.donate');
    }

    /**
     * Update the specified resource in storage.
     */
    public function terms()
    {
        return view('layouts.front-end.terms');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function bookingPolicy()
    {
        return view('layouts.front-end.booking-policy');
    }
    public function privacy()
    {
        return view('layouts.front-end.privacy-policy');
    }
}
