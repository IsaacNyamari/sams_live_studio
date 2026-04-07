<?php

namespace App\Http\Controllers;

use App\Models\Portforlio;
use Illuminate\Http\Request;

class PortforlioController extends Controller
{
    public function index()
    {

        $portforlios = Portforlio::all();

        return view('layouts.backend.portforlio.index', compact('portforlios'));
    }

    public function create()
    {
        return view('layouts.backend.portforlio.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10696',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = uniqid().time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/portfolio'), $ext);
            $data['image_path'] = 'images/portfolio/'.$ext;
        }

        Portforlio::create($data);

        return redirect()->route('dashboard.portfolio')->with('success', 'Portforlio created successfully!');
    }

    public function destroy(Portforlio $portforlio)
    {
        $imagePath = public_path($portforlio->image_path);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $portforlio->delete();

        return redirect()->route('dashboard.portfolio')->with('success', 'Portforlio deleted successfully!');
    }

    public function show(Portforlio $portforlio)
    {
        return view('layouts.backend.portforlio.show', compact('portforlio'));
    }
}
