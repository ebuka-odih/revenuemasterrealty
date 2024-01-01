<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $property = Property::all();
        return view('pages.index', compact('property'));
    }
    public function properties()
    {
        $property = Property::all();
        return view('pages.properties', compact('property'));
    }

    public function details($id)
    {
        $property = Property::findOrFail($id);
        $properties = Property::all();
        return view('pages.property-details', compact('property', 'properties'));
    }

}
