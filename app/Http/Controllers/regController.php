<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class regController extends Controller
{
    public function register(Request $request){
         
        $dataRegister = [
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=>Hash::make($request->password)
     
        ];
        User::create($dataRegister);
        return redirect("/suksesView");
    }

    // public function dataRegister(){
    //     $dataRegister=User::all();
    //     return view('pages.userView.loginView.loginView',['dataRegister'=>$dataRegister]);
    // }

    
    public function dataRegister(){
        return view("pages.adminView.dataRegister", [
            "dataRegister"=>User::all()
        ]);
    }

    // public function dataRegister(){
    //     $dataRegister=User::all();
    //     return view('pages.adminView.dataRegister',['dataRegister'
    //     =>$dataRegister]);
    // }

}
