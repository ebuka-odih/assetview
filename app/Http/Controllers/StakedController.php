<?php

namespace App\Http\Controllers;

use App\CryptoAssets;
use App\Deposits;
use App\Staking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StakedController extends Controller
{
    public function assets()
    {
        $assets = Staking::all();
        return view('dashboard.stake.assets', compact('assets'));
    }

    public function payment($id)
    {
        $asset = Staking::findOrFail($id);
        return view('dashboard.stake.payment', compact('asset'));
    }

    public function processPayment(Request $request)
    {
        $pay = new Deposits();
        $pay->user_id = Auth::id();
        $pay->crypto_asset_id = $request->coin_id;
        $pay->amount = $request->amount;
        $pay->screenshot = $request->screenshot;
        $pay->save();
        return redirect()->route('user.staking.success', $pay->id)->with('success', "Transaction Sent, Awaiting Approval...");
    }

    public function success($id)
    {
        $asset = Deposits::findOrFail($id);
        return view('dashboard.stake.success', compact('asset'));
    }

    public function history()
    {
        $deposits = Deposits::all();
        return view('dashboard.stake.history', compact('deposits'));
    }
}
