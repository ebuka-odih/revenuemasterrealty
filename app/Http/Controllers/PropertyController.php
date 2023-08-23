<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function projects()
    {
        $properties = Property::all();
        return view('dashboard.project.list', compact('properties'));
    }

    public function projectDetail($id)
    {
        $project = Property::findOrFail($id);
        return view('dashboard.project.detail', compact('project'));
    }
    public function processInvestment(Request $request)
    {
        $id = $request->project_id;

    }
}
