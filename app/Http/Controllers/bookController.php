<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
    public function book(Request $request){
         
     
     


        $data = [
          
            "name"=> $request->name,
            "date1"=> $request->date1,
            "date2"=> $request->date2,
            "email"=> $request->email,
            "desc"=> $request->desc,
           
     
        ];
        book::create($data);
        return redirect("/");
    }

}
