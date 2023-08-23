<?php

namespace App\Http\Controllers;

use App\Mail\Invested;
use App\Models\Invest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InvestController extends Controller
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

    public function invest(Request $request)
    {
        $invest = new Invest();
        $invest->amount = $request->amount;
        $invest->properties_id = $request->properties_id;
        $invest->user_id = Auth::id();
        $invest->save();
        $user = Auth::user();
        if ($user->balance > $request->amount)
        {
            if ($request->amount > $invest->properties->min_price){
                $user->balance -= $invest->amount;
                $user->save();
                $data = ['user' => $user, 'invest' => $invest];
                Mail::to($user->email)->send(new Invested($data));
                return redirect()->back()->with('success', 'Successful');
            }
            return redirect()->back()->with('error', 'Entered amount is less than min investment amount');
        }
        return redirect()->back()->with('error', 'You do not have enough balance for this property');
    }
}
