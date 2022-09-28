<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class logController extends Controller
{
    public function login(Request $request){
        $user=$request->only(['email','password']);
       
        if(Auth::attempt($user)->hasRole('admin')){
            return redirect('/');
        }
        return redirect('/loginView')->with('message', 'Login gagal! Data tidak sesuai!');
    }

    public function authenticated(Request $request, $user)
{
    if ($user('admin')) {
        return redirect()->route('admin.page');
    }

    return redirect()->route('user.page');
}
}
