<?php

namespace App\Http\Controllers;

use App\Staking;
use Illuminate\Http\Request;

class StakingController extends Controller
{
    public function stake()
    {
        $stake = Staking::all();
        return view('dashboard.stake.staking', compact('stake'));
    }
}
