<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;

class AdminTestimonyController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::all();
        return view('admin.testimony.add', compact('testimonies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'country' => 'nullable',
            'message' => 'nullable',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        if ($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $testimonies = new Testimony();
            $testimonies->username = $request->username;
            $testimonies->country = $request->country;
            $testimonies->message = $request->message;
            $testimonies->avatar = $input['imagename'];
            $testimonies->save();
            return redirect()->back();
        }
        $testimonies = new Testimony();
        $testimonies->username = $request->username;
        $testimonies->country = $request->country;
        $testimonies->message = $request->message;
        $testimonies->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $testimony = Testimony::findOrFail($id);
        return view('admin.testimony.edit', compact('testimony'));
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $testimony = Testimony::findOrFail($id);
        $testimony->delete();
        return redirect()->back()->with('success', "Deleted Successfully");
    }

}
