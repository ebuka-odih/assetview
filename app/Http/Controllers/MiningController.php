<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiningController extends Controller
{
    public function mining()
    {
        return view('dashboard.mining.mining');
    }

    public function connect()
    {
        return view('dashboard.mining.connect');
    }
}
