<?php

namespace App\Http\Controllers\Admin;

use App\CryptoAssets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCryptoAssetsController extends Controller
{

    public function index()
    {
        $assets = CryptoAssets::all();
        return view('admin.crypto.assets', compact('assets'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required',
            'interest' => 'required',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
        ]);

        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/crypto');
            $image->move($destinationPath, $input['imagename']);

            $asset = new CryptoAssets();
            $asset->name = $request->name;
            $asset->value = $request->value;
            $asset->interest = $request->interest;
            $asset->icon = $input['imagename'];
            $asset->save();
            return redirect()->back()->with('success', 'Created Successfully');
        }
        $asset = new CryptoAssets();
        $asset->name = $request->name;
        $asset->value = $request->value;
        $asset->interest = $request->interest;
        $asset->save();
        return redirect()->back()->with('success', 'Created Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $asset = CryptoAssets::findOrFail($id);
        $asset->delete();
        return redirect()->back();
    }
}
