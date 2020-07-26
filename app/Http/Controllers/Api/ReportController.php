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
//        $report = Report::select
//        ('avg(debittumpah) as debittumpah', 'avg(sungai) as sungai', 'DATE(created_at) day')
//            ->groupBy('day')->whereMonth('created_at','=', date('m'))->get();


        $report = Report::select
        (DB::raw('avg(debittumpah) as debittumpah, avg(sungai) as sungai, DATE(created_at) as day'))
            ->groupBy('day')->whereMonth('created_at','=', date('m'))->get();


        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $report
        ]);
    }

    public function daynow(){
        $report = Report::select('sungai','debittumpah','created_at')->whereDay('created_at', '=', date('d'))->get();
        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $report
        ]);
    }

    public function cobanow(){
//        $report =(DB::raw('debittumpah, sungai, TIME(created_at) as time'))
//            ->whereDay('created_at','=', date('d'))->get();
        $report = Report::select('sungai','debittumpah','created_at')->whereDay('created_at', '=', date('d'))->get();
        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $report
        ]);


        //$cc = $all->add(Carbon::parse('d/m/y'));


        $report = Report::select('sungai','debittumpah','created_at')->whereDay('created_at', '=', date('d'))->get();

        return response()->json([
            'message' => 'berhasil',
            'created_at' => 'datetime:Y-m-d',
            'status' => 1,
            'data' => $lastUpdate
        ]);

    }

}
