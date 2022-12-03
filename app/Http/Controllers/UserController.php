<?php

namespace App\Http\Controllers;

use App\CryptoAssets;
use App\Deposits;
use App\Withdraw;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function profile()
    {
        $withdrawal = Withdraw::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        $assets = Deposits::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        $user = Auth::user();
        return view('dashboard.profile', compact('user', 'assets', 'withdrawal'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->update(['name' => $request->name, 'email' => $request->email]);
        return redirect()->back()->with('success', "Profile Updated Successfully");
    }
    public function setting()
    {
        $user = Auth::user();
        return view('dashboard.settings', compact('user'));
    }




}
