<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangM;
use App\Models\KonsumenM;
use App\Models\PesertadidikM;
use App\Models\EskulM;

class HomeC extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function barang(){
        $data = BarangM::all();
        return view('pages.barang', ['data' => $data]);
    }
    public function tentang(){
        return view('pages.tentang');
    }
    public function pesertadidik(){
        $data = PesertadidikM::all();
        return view('pages.pesertadidik', ['data' => $data]);
    }
    public function eskul(){
        $data = EskulM::all();
        return view('pages.eskul', ['data' => $data]);
    }
}


