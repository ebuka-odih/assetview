<?php

namespace App\Http\Controllers\Admin;

use App\Deposits;
use App\Http\Controllers\Controller;
use App\Mail\ApproveDeposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminDeposits extends Controller
{
    public function deposits()
    {
        $deposit = Deposits::all();
        return view('admin.transactions.deposits', compact('deposit'));
    }

    public function details($id)
    {
        $deposit = Deposits::findOrFail($id);
        return view('admin.transactions.deposit-details', compact('deposit'));
    }

    public function approve_deposit(Request $request, $id)
    {
        $deposit = Deposits::findOrFail($id);
        $user = \App\User::findOrFail($deposit->user_id);
        $user->balance += $request->amount;
        $user->save();
        $deposit->status = 1;
        $deposit->save();
        Mail::to($user->email)->send(new ApproveDeposit($deposit));
        return redirect()->back()->with('success', "Deposit approved successfully");
    }



}
