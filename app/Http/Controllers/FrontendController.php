<?php

namespace App\Http\Controllers;
use App\Masyarakat;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function daftar(Request $request){
        $masyarakat = new Masyarakat();
        $masyarakat->no_hp = $request->no_hp;
        $masyarakat->save();
        return redirect()->route('frontend.index')->with('success', 'Berhasil Mendaftarakan Whatsapp');


    }
}
