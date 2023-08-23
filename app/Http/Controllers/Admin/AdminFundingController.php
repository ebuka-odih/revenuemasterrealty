<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Funding;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\String\u;

class AdminFundingController extends Controller
{
    public function index()
    {
        $funding = Funding::all();
        $users = User::all();
        return view('admin.transactions.funding', compact('funding', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'amount' => 'required',
           'type' => 'required',
        ]);
        $data = new Funding();
        if ($request->type == 'Profit')
        {
            $data->type = $request->type;
            $data->amount = $request->amount;
            $data->status = 1;
            $data->user_id = $request->user_id;
            $user = User::findOrFail($data->user_id);
            $user->profit += $request->amount;
            $data->save();
            $user->save();
            return redirect()->back()->with('success', 'Funding Sent Successfully');
        }
        $data->type = $request->type;
        $data->status = 1;
        $data->amount = $request->amount;
        $data->user_id = $request->user_id;
        $user = User::findOrFail($data->user_id);
        $user->balance += $request->amount;
        $data->save();
        $user->save();
        return redirect()->back()->with('success', 'Funding Sent Successfully');
    }
}
