<?php

namespace App\Http\Controllers;

use App\Mail\AdminWithdrawAlert;
use App\Mail\RequestWithdraw;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    public function withdraw()
    {
        $user = Auth::user();
        return view('dashboard.withdraw.withdraw', compact('user'));
    }
    public function processWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'bank' => 'nullable',
            'acct_name' => 'nullable',
            'acct_num' => 'nullable',
            'swift_code' => 'nullable',
            'paypal_email' => 'nullable',
            'btc_address' => 'nullable',
            'eth_address' => 'nullable',
        ]);
        $withdraw = new Withdraw();
        if ($request->amount < \auth()->user()->balance || $request->amount < \auth()->user()->profit){
            if ($request->amount >= 50){
                $withdraw->user_id = Auth::id();
                $withdraw->amount = $request->amount;
                $withdraw->bank = $request->bank;
                $withdraw->acct_name = $request->acct_name;
                $withdraw->acct_num = $request->acct_num;
                $withdraw->swift_code = $request->swift_code;

                $withdraw->paypal_email = $request->paypal_email;
                $withdraw->btc_address = $request->btc_address;
                $withdraw->eth_address = $request->eth_address;
                $user = User::findOrFail($withdraw->user_id);
                $data = ['withdraw' => $withdraw, 'user' => $user];
                $withdraw->save();
                Mail::to($user->email)->send(new RequestWithdraw($data));
                $admin = User::where('admin', 1)->first();
                Mail::to($admin->email)->send( new AdminWithdrawAlert($data));
                return redirect()->back()->with('success', 'Your withdrawal request has been sent successfully, awaiting approval');
            }
            return redirect()->back()->with('nop', "You can't withdraw less than 50 USD");
        }
        return redirect()->back()->with('low_balance', "Insufficient Balance");

    }
}
