<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Staking;
use Illuminate\Http\Request;

class AdminStakingController extends Controller
{
    public function stakes()
    {
        $stake = Staking::all();
        return view('admin.stakes', compact('stake'));
    }

    public function storeStake(Request $request)
    {
        $request->validate([
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
        ]);
        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/crypto');
            $image->move($destinationPath, $input['imagename']);

            $stake = new Staking();
            $stake->name = $request->name;
            $stake->interest = $request->interest;
            $stake->duration = $request->duration;
            $stake->value = $request->value;
            $stake->icon = $input['imagename'];
            $stake->save();
            return redirect()->back();
        }
        $stake = new Staking();
        $stake->name = $request->name;
        $stake->interest = $request->interest;
        $stake->value = $request->value;
        $stake->duration = $request->duration;
        $stake->save();
        return redirect()->back();

    }
}
