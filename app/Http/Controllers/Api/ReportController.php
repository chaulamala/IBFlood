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

    public function apa(){
        $bulan = Carbon::now()->month;
        $report = Report::select(DB::raw('created_at'), DB::raw('AVG(sungai) as sungai'), DB::raw('AVG(debittumpah) as debittumpah'))
            ->groupBy('created_at')->whereMonth('created_at', $bulan)->get();

        $t = Carbon::now()->month($bulan)->endOfMonth()->format('d');
        $tanggal = (int)$t;

        $reports = [];
        foreach ($report as $item) {
            $date = date_format($item->created_at, "d");
            $reports["$date"] = [
                'created_at' => $item->created_at,
                'sungai' => $item->sungai,
                'debit_tumpah' => $item->debittumpah
            ];
        }


//        $report = Report::select
//        (DB::raw('avg(debittumpah) as debittumpah, avg(sungai) as sungai, DATE(created_at) as day'))->groupBy('day')->whereMonth('created_at','=','7')->get();
        return response()->json([
            'message' => 'berhasil',
            'status' => 1,
            'data' => $reports
        ]);
    }
    public function monthnow(){


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
