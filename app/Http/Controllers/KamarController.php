<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function tableKamar(){
        $kamar = Kamar::all();
        return view('pages.adminView.kamarTable',compact(['kamar']));
    }

    public function receptionistTable(){
        $kamar = Kamar::all();
        return view('pages.receptionistView.kamarTable',compact(['kamar']));
    }

    public function hotelUser(){
        $kamar = Kamar::all();
        return view('pages.userView.testView.listKamar',compact(['kamar']));
    }

    public function createKamar(){
        return view('pages.adminView.tambahKamar');
    }

    public function storeKamar(Request $request){
        // dd($request->except(['_token']));
        Kamar::create($request->except(['_token']));
        return redirect('/dataKamar');
    }

    public function editKamar($id){
        $kamar = Kamar::find($id);
        // dd($kamar);
        return view('pages.adminView.editKamar', compact(['kamar']));
    }

    public function updateKamar($id,Request $request){
        $kamar = Kamar::find($id);

        $kamar->update($request->except(['_token']));
        return redirect('/dataKamar');
    }

    public function deleteKamar($id){
        $kamar= Kamar::find($id);
        $kamar->delete();
        return redirect('/dataKamar');
    }
}
