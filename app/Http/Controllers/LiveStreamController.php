<?php

namespace App\Http\Controllers;

use App\Models\LiveStream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LiveStreamController extends Controller
{
    public function index()
    {
        $streams = LiveStream::all();
        return view('layouts.backend.stream.index', compact('streams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show form to create a new live stream
        return view('layouts.backend.stream.create');
    }
    public function store(Request $request)
{
    // Validate the request data
    $data = $request->validate([
        'recording' => 'boolean',
        'title' => 'required|max:255',
        'description' => 'required|max:255'
    ]);
    
    $stream_url_prefix = 'https://lvpr.tv?v=';
    
    // Create stream in Livepeer
    $response = Http::withToken(env('LIVEPEER_API'))
        ->post('https://livepeer.studio/api/stream', [
            'name' => $data['title'],
            'record' => $request->recording ? true : false,
        ]);
    
    // Check if API request was successful
    if (!$response->successful()) {
        return back()->withErrors(['api_error' => 'Failed to create stream in Livepeer. Please try again.']);
    }
    
    $stream = $response->json();
    
    // Check if required fields exist in response
    if (!isset($stream['playbackId']) || !isset($stream['streamKey']) || !isset($stream['id'])) {
        return back()->withErrors(['api_error' => 'Invalid response from Livepeer API.']);
    }
    
    $stream_url = $stream_url_prefix . $stream['playbackId'];
    $stream_key = $stream['streamKey'];
    
    $newStream = [
        'title' => $data['title'],
        'description' => $data['description'],
        'stream_key' => $stream_key,
        'stream_url' => $stream_url,
        'stream_id' => $stream['id'],
    ];
    
    // Check if a stream already exists
    $existingStream = LiveStream::first();
    
    if (!$existingStream) {
        // Create new stream
        $stream_data = LiveStream::create($newStream);
        return redirect()->route('dashboard.streams')->with('success', 'Stream created successfully!');
    } else {
        // Update existing stream
        $existingStream->update($newStream);
        return redirect()->route('dashboard.streams')->with('success', 'Stream updated successfully!');
    }
}
    public function stop(LiveStream $stream)
    {
        // delete from the database as well

        $token = env('LIVEPEER_API'); // Get this from Livepeer Studio dashboard

        // Replace with actual stream ID
        $streamId = $stream->stream_id; // The actual ID from your stream
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->delete('https://livepeer.studio/api/stream/' . $streamId);

        if ($response->failed()) {
            echo "Error #:" . $response->status() . "\n";
            echo $response->body();
        } else {
            $stream->status = 'ended';
            $stream->save();
            return redirect()->route('dashboard.streams');
        }
    }
}
