<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;

class AdminImageController extends Controller
{
    public function image($id)
    {
        $property = Property::with('images')->find($id);
        return view('admin.property.upload-image', compact('property'));
    }
    public function storeImage(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imagePath = $this->uploadImage($request->file('image'), 'files');

        Image::create([
            'properties_id' => $request->properties_id,
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully');
    }
}
