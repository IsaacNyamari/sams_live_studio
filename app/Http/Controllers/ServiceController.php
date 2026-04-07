<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('layouts.backend.services.index', compact('services'));
    }

    public function create()
    {
        return view('layouts.backend.services.create');
    }

    public function edit(Service $service)
    {
        return view('layouts.backend.services.edit',compact('service'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10696',
            'icon' => 'required',
        ]);
        if ($request->has('image')) {
            $image = $request->file('image');
            $filename = uniqid().time().''.$image->getClientOriginalExtension();
            $image->move(public_path('images/services/'), $filename);
            $data['image_path'] = 'images/services/'.$filename;
        }
        Service::create($data);

        return redirect()->route('dashboard.service');
    }

    public function update(Request $request,Service $service) {}

    public function show(Service $service) {}

    public function destroy(Service $service) {}
}
