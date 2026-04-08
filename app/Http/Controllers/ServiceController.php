<?php

namespace App\Http\Controllers;

use App\Events\RefreshServices;
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
        return view('layouts.backend.services.edit', compact('service'));
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
            $filename = uniqid().time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/services/'), $filename);
            $data['image_path'] = 'images/services/'.$filename;
        }
        Service::create($data);
        broadcast(new RefreshServices)->toOthers();

        return redirect()->route('dashboard.service');
    }

    public function update(Request $request, Service $service)
    {

        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required|string',
            'image' => 'nullable|mimes:avif,jpeg,jpg,png,gif,svg|max:10240',
        ]);

        if (! empty($data['image'])) {
            if (file_exists(public_path($service->image_path))) {
                unlink(public_path($service->image_path));
            }
            $image = $data['image'];
            $filename = uniqid().time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/services/'), $filename);
            $data['image_path'] = 'images/services/'.$filename;
            $service->update($data);

            return back()->with('success', 'service updated successfully!');
        } else {
            $service->update($data);

            return back()->with('success', 'service updated successfully!');
        }

    }

    public function show(Service $service) {}

    public function destroy(Service $service)
    {
        $service->delete();
        broadcast(new RefreshServices)->toOthers();
        return back()->with('success', 'service deleted successfully!');
    }
}
