<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveWithdraw;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminWithdrawalController extends Controller
{
    public function withdrawal()
    {
        $withdraw = Withdraw::all();
        return view('admin.transactions.withdrawal', compact('withdraw'));
    }
    public function approve_withdrawal($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $user = User::findOrFail($withdraw->user_id);
        $user->balance -= $withdraw->amount;
        $user->save();
        $withdraw->status = 1;
        $withdraw->save();
        Mail::to($user->email)->send(new ApproveWithdraw($withdraw));
        return redirect()->back()->with('success', "Withdrawal Approved Successfully");
    }

    public function deleteWithdrawal($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->delete();
        return redirect()->back();
    }



}
