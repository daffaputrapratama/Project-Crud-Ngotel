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

    public function tableKamarr(){
        return view("pages.adminView.kamarTable", [
            "kamar"=>Kamar::all()
        ]);
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
        $kamar = Kamar::create($request->except(['_token']));

        if($request->hasFile('foto')){
            $request->file('foto')->move('public/images/hotel/'. $request->file('foto')->getClientOriginalName());
            $kamar->foto = $request->file('foto')->getClientOriginalName();
            $kamar->save();
        }
        
        return redirect('/dataKamar');
    }

    public function editKamar($id){
        $kamar = Kamar::find($id);
        // dd($kamar);
        return view('pages.adminView.editKamar', compact(['kamar']));
    }
    
    public function editKamarStatus($id){
        $kamar = Kamar::find($id);
        // dd($kamar);
        return view('pages.receptionistView.editKamar', compact(['kamar']));
    }

    public function updateKamar($id,Request $request){
        $kamar = Kamar::find($id);

        $kamar->update($request->except(['_token']));
        return redirect('/dataKamar');
    }

    public function updateKamarStatus($id,Request $request){
        $kamar = Kamar::find($id);

        $kamar->update($request->except(['_token']));
        return redirect('/receptionist');
    }

    public function deleteKamar($id){
        $kamar= Kamar::find($id);
        $kamar->delete();
        return redirect('/dataKamar');
    }
    public function dataKamar()
    {
        $dataKamar = Kamar::latest()->paginate(20);
        return view('pages.adminView.dataKamar', compact('dataKamar'));
    }
    public function search(Request $request){
        $searchResult = $request->search;
        $result=Kamar::where('namaKamar','LIKE','%' .$searchResult. '%' )->paginate();
        return view('pages.adminView.kamarTable', ['kamar' => $result]);
    }

    public function receptionistSearch(Request $request){
        $searchResult = $request->search;
        $result=Kamar::where('namaKamar','LIKE','%' .$searchResult. '%' )->paginate();
        return view('pages.receptionistView.kamarTable', ['kamar' => $result]);
    }

    public function listSearch(Request $request){
        $searchResult = $request->search;
        $result=Kamar::where('namaKamar','LIKE','%' .$searchResult. '%' )->paginate();
        return view('pages.userView.testView.listKamar', ['kamar' => $result]);
    }
}
