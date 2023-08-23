<?php

namespace App\Http\Controllers;

use App\Models\Invest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function dashboard()
   {
       $invested_count = Invest::whereUserId(auth()->id())->count();
       $invested = Invest::whereUserId(auth()->id())->select('amount')->sum('amount');
       $total_property = Property::count();
       return view('dashboard.index', compact('invested', 'invested_count', 'total_property'));
   }

   public function profile()
   {
       $user = Auth::user();
       return view('dashboard.profile', compact('user'));
   }

   public function updateProfile(Request $request)
   {
       $data = [
          'name' => 'nullable',
          'email' => 'nullable',
          'phone' => 'nullable',
          'title' => 'nullable',
          'address' => 'nullable',
          'state' => 'nullable',
          'city' => 'nullable',
          'country' => 'nullable',
       ];
       $data = $request->validate($data);
       $user = Auth::user();
       $user->update($data);
       return redirect()->back()->with('success', "Profile Updated Successfully");
   }
}
