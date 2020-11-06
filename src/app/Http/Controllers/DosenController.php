<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Dosen;


class DosenController extends Controller
{
    //
    public function index(){
        return view('dosen',[
        "dosen" => Dosen::all()
        ]);
    }

    public function tampil($nidn){

        $dosen = Dosen::find($nidn);

        return view('dosen',[
            "dosen" => Dosen::all(),
            "data" =>$dosen
        ]);
    }
}
