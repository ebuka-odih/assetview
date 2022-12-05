<?php

namespace App\Http\Controllers;

use App\CryptoAssets;
use App\Deposits;
use App\Rules\MatchOldPassword;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->back()->with('success', "Password Changed Successfully");
    }




}
