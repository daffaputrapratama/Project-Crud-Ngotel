<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class logController extends Controller
{
    public function login(Request $request){
        $credentials=$request->only(['email','password']);
        if(Auth::attempt($credentials)){
            return redirect('/dash');
        }
        return redirect('/loginView')->with('message', 'Login gagal! Data tidak sesuai!');
    }
}
