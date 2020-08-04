<?php

namespace App\Http\Controllers;
use App\Masyarakat;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function daftar(Request $request){
        $masyarakat = new Masyarakat();
        $masyarakat->no_hp = $request->no_hp;
        $masyarakat->save();
        return view('frontend.index')->with('success','Berhasil');
        //return redirect()->route('frontend')->with('success', 'Berhasil Mendaftarakan Whatsapp');


    }
}
