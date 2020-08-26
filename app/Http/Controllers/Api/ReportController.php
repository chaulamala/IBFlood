<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Carbon\CarbonTimeZone;
use App\Http\Controllers\Controller;
use App\Report;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->format('d M Y H:i');
    }
    public function store(Request $request)
    {
        $report = Report::create([
            'sungai' => $request->sungai,
            'debittumpah' => $request->debittumpah,

        ]);

        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $report
        ], 201);

    }

    public function monthnow(){


        $report = Report::select
        (DB::raw('avg(debittumpah) as debittumpah, avg(sungai) as sungai, DATE(created_at) as day'))
            ->groupBy('day')->whereMonth('created_at','=', date('m'))->orderBy('created_at')->get();


        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $report
        ]);
    }

    public function daynow(){
        $report = Report::select('sungai','debittumpah','created_at')->whereDay('created_at', '=', date('d'))->orderBy('created_at','asc')->get();
        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $report
        ]);
    }


}
