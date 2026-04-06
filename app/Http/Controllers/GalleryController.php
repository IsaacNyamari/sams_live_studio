<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();

        return view('layouts.backend.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('layouts.backend.gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:102696',
        ]);
        $file = $request->file('image');
        $file->move(public_path('images/gallery'), $file->getClientOriginalName());
        Gallery::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image_path' => 'images/gallery/'.$file->getClientOriginalName(),
        ]);
        return redirect()->route('dashboard.gallery')->with('success', 'Gallery item created successfully');
    }

    public function destroy(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $imagePath = public_path($gallery->image_path);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $gallery->delete();

        return redirect()->route('dashboard.gallery')->with('success', 'Gallery item deleted successfully');
    }
}
