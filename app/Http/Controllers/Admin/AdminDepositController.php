<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveDeposit;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminDepositController extends Controller
{
    public function deposits()
    {
        $deposits = Deposit::all();
        return view('admin.transactions.deposits', compact('deposits'));
    }

    public function acceptDeposit($id)
    {
       $deposit = Deposit::findOrFail($id);
       $user = User::findOrFail($deposit->user_id);
       $user->balance += $deposit->amoun;
       $deposit->status = 1;
       $user->save();
       $deposit->save();
       $data = ['user' => $user, 'deposit' => $deposit];
       Mail::to($user->email)->send(new ApproveDeposit($data));
       return redirect()->back()->with('success', 'Approved Successfully');
    }

    public function deleteDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();
        return redirect()->back();
    }
}
