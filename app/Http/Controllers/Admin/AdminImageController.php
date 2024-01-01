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
                'image' => 'required|array', // Make sure it's an array of images
                'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);

            $images = [];
            foreach ($request->file('image') as $image) {
                try {
                    $imagePath = $this->uploadImage($image, 'files'); // Use $image instead of $request->file('image')
                    $images[] = ['image_path' => $imagePath];

                    Image::create([
                        'properties_id' => $request->properties_id,
                        'image_path' => $imagePath, // Use $imagePath here, not $image
                    ]);
                }catch (\Exception $e){
                    return $e;
                }

                return redirect()->back()->with('success', 'Images uploaded successfully');
            }


    }

    public function storeImage2(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);
        $imagePath = $this->uploadImage($request->file('image'), 'files');

        Image::create([
            'properties_id' => $request->properties_id,
            'image_path' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Image uploaded successfully');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return redirect()->back()->with('success', ' Deleted successfully');
    }
}
