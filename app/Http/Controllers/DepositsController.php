<?php

namespace App\Http\Controllers;

use App\Deposits;
use Illuminate\Http\Request;

class DepositsController extends Controller
{
    public function wallet()
    {

        $total_roi = Deposits::whereUserId(auth()->id())->where('status', 1);

        $deposits = Deposits::whereUserId(auth()->id())->where('status', 1)->get();
        return view('dashboard.crypto.wallet', compact('deposits', 'total_roi'));
    }

    public function history()
    {
        $deposits = Deposits::whereUserId(auth()->id())->where('status', 0)->get();
        return view('dashboard.crypto.history', compact('deposits'));
    }
}
