<?php

namespace App\Http\Controllers;

use App\Report;
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
        $report = Report::select('created_at', DB::raw('AVG(sungai) as sungai'), DB::raw('AVG(debittumpah) as debittumpah'))
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


        return view('pages.datareport', compact('reports', 'bulan', 'tanggal'));
        //return view('pages.datareport', compact('report', 'bulan'));
    }

    public function sungai()
    {
        $sungai = Report::select('created_at', 'sungai')->get();
        return view('pages.ketinggiansungai', compact('sungai'));
    }

    public function debittumpah()
    {
        $debittumpah = Report::select('created_at', 'debittumpah')->get();
        return view('pages.ketinggiandebittumpah', compact('debittumpah'));
    }


    public function search(Request $request)
    {
        //$report = Report::select('created_at',DB::raw('AVG(sungai) as sungai'),DB::raw('AVG(debittumpah) as debittumpah'))->groupBy('created_at')->get();
        $report = Report::select('created_at', DB::raw('AVG(sungai) as sungai'), DB::raw('AVG(debittumpah) as debittumpah'))
            ->groupBy('created_at')->whereMonth('created_at', $request->bulan)->get();

        $bulan = $request->bulan;
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
        return view('pages.datareport', compact('reports', 'bulan', 'tanggal'));
    }

    public function printreport($bulan)
    {
        $report = Report::select('created_at', DB::raw('AVG(sungai) as sungai'), DB::raw('AVG(debittumpah) as debittumpah'))
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

        $arr_bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
            'September', 'Oktober', 'November', 'Desember'];

        $nama_bulan = $arr_bulan[$bulan - 1];



        $pdf =PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('pages.printreport', compact(['reports','bulan','tanggal', 'nama_bulan']));
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
