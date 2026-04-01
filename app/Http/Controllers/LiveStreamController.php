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
        // Show form to create a new live stream
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        $stream_url_prefix = 'https://lvpr.tv?v=';
        $response = Http::withToken(env('LIVEPEER_API'))
            ->post('https://livepeer.studio/api/stream', [
                'name' => $data['title'],
                'record' => true,
            ]);
        $stream = json_decode($response, true);



        $stream_url = $stream_url_prefix . $stream['playbackId'];
        $stream_key = $stream['streamKey'];

        $streams = LiveStream::all()->count();
        $newStream = [
            'title' => $data['title'],
            'description' => $data['description'],
            'stream_key' => $stream_key,
            'stream_url' => $stream_url,
            'stream_id' => $stream['id'],
        ];
        if ($streams < 1) {
            $stream_data =  LiveStream::create($newStream);
            return redirect()->route('dashboard.streams');
        } else {
            $stream_data = LiveStream::first()->get();
            $stream_data->update($newStream);
            return redirect()->route('dashboard.streams')->with('stream exists')->compact('stream_data');
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
            $stream->delete();
            return redirect()->route('dashboard.streams');
        }
    }
}
