<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Notif;

class NotifController extends Controller
{
    public function index(){
        $notif = Notif::all();
        return response()->json([
           'message' => 'berhasil',
           'status' => 1,
           'data' => $notif
        ], 201);

    }
    public function store(Request $request){
        $notif = Notif::create([
            'isi_notif' => $request->isi_notif
        ]);

        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $notif
        ], 201);

    }
}
