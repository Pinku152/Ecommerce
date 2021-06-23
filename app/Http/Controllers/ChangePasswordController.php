<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    //
    public function index(){
        return view('admin.changePassword');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:5',
            'confirm_password' => 'required|same:new_password',
        ]);

        //$admin = Auth::admin();
        //$admin = Auth::guard('admin');
        $user = User::find(auth()->user()->id);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors('error', 'Current password does not match!');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('/admin')->with('success', 'Password successfully changed!');
    }

}
