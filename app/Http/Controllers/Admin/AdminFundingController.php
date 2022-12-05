<?php

namespace App\Http\Controllers\Admin;

use App\Funding;
use App\Http\Controllers\Controller;
use App\Mail\FundingMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminFundingController extends Controller
{
    public function fund()
    {
        $users = User::all();
        return view('admin.add-fund', compact('users'));
    }
    public function sendFund(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = $request->user_id;
        $data['status'] = 1;
        $data = Funding::create($data);
        $user = User::findOrFail($data->user_id);
        if ($data['type'] == 'balance'){
            $user->balance += $request->amount;
            $user->save();
        }elseif($data['type'] == 'stake_bal')
        {
            $user->stake_bal += $request->amount;
            $user->save();
        }
        elseif($data['type'] == 'mined_bal')
        {
            $user->mined_bal += $request->amount;
            $user->save();
        }
        $user->profit += $request->amount;
        $user->save();
        Mail::to($user->email)->send(new FundingMail($data));
        return redirect()->back()->with('success', "Fund sent successfully");
    }

    protected function getData(Request $request)
    {
        $rules = [
            'type' => 'required',
            'amount' => 'required',
        ];
        return $request->validate($rules);
    }

    public function defund()
    {
        $users = User::all();
        return view('admin.defund', compact('users'));
    }

    public function sendDefund(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = $request->user_id;
        $data['status'] = 1;
        $data = Funding::create($data);
        $user = User::findOrFail($data->user_id);
        if ($data['type'] == 'balance'){
            $user->balance -= $request->amount;
            $user->save();
        }elseif($data['type'] == 'stake_bal')
        {
            $user->stake_bal -= $request->amount;
            $user->save();
        }
        elseif($data['type'] == 'mined_bal')
        {
            $user->mined_bal -= $request->amount;
            $user->save();
        }
        $user->profit -= $request->amount;
        $user->save();
        return redirect()->back()->with('debit', "Account debited successfully");
    }
    

}
