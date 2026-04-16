<?php

namespace App\Http\Controllers;

use \App\Events\LoadStudioPackages;
use App\Models\PackageFeatures;
use App\Models\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Packages::with('features')->get()->sortByDesc('price');

        return view('layouts.backend.packages.index', compact('packages'));
    }
    public function create()
    {
        return view('layouts.backend.packages.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
        ]);

        $package = new Packages();
        $package->name = $request->name;
        $package->description = $request->description;
        $package->price = $request->price;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('packages', 'public');
            $package->image_path = '/storage/' . $imagePath;
        }

        $package->save();

        if ($request->features) {
            foreach ($request->features as $feature) {
                PackageFeatures::create([
                    'package_id' => $package->id,
                    'feature' => $feature,
                ]);
            }
        }

        return redirect()->route('packages')->with('success', 'Package created successfully.');
    }

    public function edit(Packages $package)
    {

        return view('layouts.backend.packages.edit', compact('package'));
    }
    public function destroy(Packages $package)
    {
        $package->delete();
broadcast(new LoadStudioPackages('Package deleted'));
        return redirect()->route('packages')->with('success', 'Package deleted successfully.');
    }
}
