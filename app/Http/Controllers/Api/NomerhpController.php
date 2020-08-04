<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Masyarakat;

class NomerhpController extends Controller
{
    public function all(){
        $masyarakat = Masyarakat::all();
        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $masyarakat
        ]);
    }
}
