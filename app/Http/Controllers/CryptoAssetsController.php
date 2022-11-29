<?php

namespace App\Http\Controllers;

use App\CryptoAssets;
use Illuminate\Http\Request;

class CryptoAssetsController extends Controller
{
    public function assets()
    {
        $assets = CryptoAssets::all();
        return view('dashboard.crypto.assets', compact('assets'));
    }
}
