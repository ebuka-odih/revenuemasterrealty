<?php

namespace App\Http\Controllers;

use App\Mail\AdminDepositAlert;
use App\Models\Deposit;
use App\Models\PaymentMethod;
use App\Models\User;
use App\Notifications\RequestBankTransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class DepositController extends Controller
{
    public function deposit()
    {
        return view('dashboard.deposit.deposit', );
    }

    public function requestBankinfo(Request $request)
    {
        $user = Auth::user();
        $admin = User::where('admin', 1)->first();
        Notification::send($admin, new RequestBankTransfer($user));
        return redirect()->back()->with('success', "Request Sent Successfully");
    }
    public function crypto()
    {
        $p_method = PaymentMethod::all();
        return view('dashboard.deposit.crypto', compact('p_method'));
    }

    public function cryptoDeposit(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'payment_methods_id' => 'required',
        ]);
        $deposit = new Deposit();
        $deposit->user_id = Auth::id();
        $deposit->amount = $request->amount;
        $deposit->payment_methods_id = $request->payment_methods_id;
        $deposit->save();
        return redirect()->route('user.payment', $deposit->id);
    }

    public function payment($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.payment', compact('deposit'));
    }

    public function processPayment(Request $request)
    {
        $request->validate([
                'reference' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            ]
        );
        if ($request->hasFile('reference')){
            $image = $request->file('reference');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/file');
            $image->move($destinationPath, $input['imagename']);

            $id = $request->deposit_id;
            $deposit = Deposit::findOrFail($id);
            $deposit->update(['reference' => $input['imagename'] ]);
            $admin = User::where('admin', 1)->first();
            Mail::to($admin)->send(new AdminDepositAlert($deposit));
            return redirect()->back()->with('success', "Transaction Sent, Awaiting Approval ");
        }
        return redirect()->back()->with('declined', "Please Upload Your Payment Screenshot ");

    }



}
