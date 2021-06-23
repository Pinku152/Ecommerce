<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.profile')->with('user',$user);
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->update($request->all());
        return view('admin.profile')->with('user',$user);
    }
}
