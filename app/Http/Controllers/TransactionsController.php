<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Funding;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function depositHistory()
    {
        $deposits = Deposit::whereUserId(auth()->id())->get();
        return view('dashboard.transactions.deposit-history', compact('deposits'));
    }
    
    public function withdrawalHistory()
    {
        $withdrawal = Withdraw::whereUserId(auth()->id())->get();
        return view('dashboard.transactions.withdrawal-history', compact('withdrawal'));
    }

    public function fundingHistory()
    {
        $funding = Funding::whereUserId(auth()->id())->get();
        return view('dashboard.transactions.funding-history', compact('funding'));
    }

}
