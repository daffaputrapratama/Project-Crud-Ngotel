<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function dataKamar()
    {
        $dataKamar = Kamar::latest()->paginate(20);
        return view('pages.adminView.dataKamar', compact('dataKamar'));
    }
}
