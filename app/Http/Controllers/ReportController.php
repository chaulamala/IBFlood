<?php

namespace App\Http\Controllers;

use App\Report;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulan = Carbon::now()->month;


        $report = Report::select(DB::raw('DATE(created_at) as day'), DB::raw('AVG(sungai) as sungai'), DB::raw('AVG(debittumpah) as debittumpah'))
            ->groupBy('day')->whereMonth('created_at', $bulan)->get();

//        dd($report);


//        $t = Carbon::now()->month($bulan)->endOfMonth()->format('d');
//        $tanggal = (int)$t;

        $start = Carbon::now()->startOfMonth();
        $last = Carbon::now()->lastOfMonth();

        $dates = [];

        for ($i = 0; $i <= $last->diffInDays($start); $i++) {
            $dates[] = (clone $start)->addDays($i)->format('d');
        }

//        dd($dates);

        $reports = [];
        foreach ($report as $item) {
            $date = substr($item->day, 8, 10);
            $reports["$date"] = [
                'created_at' => $item->day,
                'sungai' => $item->sungai,
                'debit_tumpah' => $item->debittumpah
            ];
        }

//        dd($reports);
//        dd($tanggal);
        return view('pages.datareport', compact(['reports', 'bulan', 'dates']));
    }

    public function sungai()
    {
        $sungai = Report::select('created_at', 'sungai')->orderBy('created_at', 'asc')->get();
        return view('pages.ketinggiansungai', compact('sungai'));
    }

    public function debittumpah()
    {
        $debittumpah = Report::select('created_at', 'debittumpah','sungai')->get();
        return view('pages.ketinggiandebittumpah', compact('debittumpah'));
    }


    public function search(Request $request)
    {
        $report = Report::select(DB::raw('DATE(created_at) as day'), DB::raw('AVG(sungai) as sungai'), DB::raw('AVG(debittumpah) as debittumpah'))
            ->groupBy('day')->whereMonth('created_at', $request->bulan)->get();

        $bulan = $request->bulan;

        $start = Carbon::now()->startOfMonth();
        $last = Carbon::now()->lastOfMonth();

        $dates = [];

        for ($i = 0; $i <= $last->diffInDays($start); $i++) {
            $dates[] = (clone $start)->addDays($i)->format('d');
        }

        $reports = [];
        foreach ($report as $item) {
            $date = substr($item->day, 8, 10);

            $reports["$date"] = [
                'created_at' => $item->created_at,
                'sungai' => $item->sungai,
                'debit_tumpah' => $item->debittumpah
            ];
        }
        return view('pages.datareport', compact('reports', 'bulan', 'dates'));
    }

    public function printreport($bulan)
    {
        $report = Report::select(DB::raw('DATE(created_at) as day'), DB::raw('AVG(sungai) as sungai'), DB::raw('AVG(debittumpah) as debittumpah'))
            ->groupBy('day')->whereMonth('created_at', $bulan)->get();


        $start = Carbon::now()->startOfMonth();
        $last = Carbon::now()->lastOfMonth();

        $dates = [];

        for ($i = 0; $i <= $last->diffInDays($start); $i++) {
            $dates[] = (clone $start)->addDays($i)->format('d');
        }

        $reports = [];
        foreach ($report as $item) {
            $date = substr($item->day, 8, 10);

            $reports["$date"] = [
                'created_at' => $item->created_at,
                'sungai' => $item->sungai,
                'debit_tumpah' => $item->debittumpah
            ];
        }

        $arr_bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
            'September', 'Oktober', 'November', 'Desember'];

        $nama_bulan = $arr_bulan[$bulan - 1];



        $pdf =PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('pages.printreport', compact(['reports','bulan','dates', 'nama_bulan']));
        return $pdf->stream();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
