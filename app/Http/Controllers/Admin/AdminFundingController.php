<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\FundedMail;
use App\Models\Funding;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        $funding = new Funding();
        if ($request->type == 'Profit')
        {
            $funding->type = $request->type;
            $funding->amount = $request->amount;
            $funding->status = 1;
            $funding->user_id = $request->user_id;
            $user = User::findOrFail($funding->user_id);
            $user->profit += $request->amount;
            $funding->save();
            $user->save();
            $data = ['user' => $user, 'funding' => $funding];
            Mail::to($user->email)->send(new FundedMail($data));
            return redirect()->back()->with('success', 'Funding Sent Successfully');
        }
        $funding->type = $request->type;
        $funding->status = 1;
        $funding->amount = $request->amount;
        $funding->user_id = $request->user_id;
        $user = User::findOrFail($funding->user_id);
        $user->balance += $request->amount;
        $funding->save();
        $user->save();
        $data = ['user' => $user, 'funding' => $funding];
        Mail::to($user->email)->send(new FundedMail($data));
        return redirect()->back()->with('success', 'Funding Sent Successfully');
    }
}
