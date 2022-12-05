<?php

namespace App\Http\Controllers;

use App\CryptoAssets;
use App\Deposits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CryptoAssetsController extends Controller
{
    public function assets()
    {
        $assets = CryptoAssets::all();
        return view('dashboard.crypto.assets', compact('assets'));
    }

    public function payment($id)
    {
        $asset = CryptoAssets::findOrFail($id);
        return view('dashboard.crypto.payment', compact('asset'));
    }

    public function processPayment(Request $request)
    {
        $pay = new Deposits();
        $pay->user_id = Auth::id();
        $pay->crypto_asset_id = $request->coin_id;
        $pay->screenshot = $request->screenshot;
        $pay->save();
        return redirect()->route('user.assets.success', $pay->id)->with('success', "Transaction Sent, Awaiting Approval...");
    }
     public function success($id)
     {
         $asset = Deposits::findOrFail($id);
         return view('dashboard.crypto.success', compact('asset'));
     }

     public function history()
     {
         $deposits = Deposits::all();
         return view('dashboard.crypto.history', compact('deposits'));
     }

}
