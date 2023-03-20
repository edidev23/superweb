<?php

namespace App\Http\Controllers\Admin\Eticketing;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function touristVisitors(Request $request)
    {
        $start = $request->start ? $request->start : Date("Y-m-d", strtotime("-7 days"));
        $end = $request->end ? $request->end : Date("Y-m-d");

        return view('admin/pages/eticketing/report/report-tourist-visitors', compact('start', 'end'));
    }

    public function allDestination(Request $request)
    {
        $start = $request->start ? $request->start : Date("Y-m-d", strtotime("-7 days"));
        $end = $request->end ? $request->end : Date("Y-m-d");

        return view('admin/pages/eticketing/report/report-ticket-destination', compact('start', 'end'));
    }

    public function ticketTabuhan()
    {
        return view('admin/pages/eticketing/report/report-tabuhan');
    }

    public function ticketMustikaConservasi()
    {
        return view('admin/pages/eticketing/report/report-mustika-conservasi');
    }

    public function printAllDestination(Request $request)
    {
        $start = $request->start ? $request->start : Date("Y-m-d", strtotime("-7 days"));
        $end = $request->end ? $request->end : Date("Y-m-d");

        $data = [];

        $pdf = Pdf::loadView('admin.pdf.report-all-destination', $data)->setPaper('a4', 'potrait');
        $pdf->render();

        return $pdf->download('Laporan Tiket Destinasi ' . $start . ' sampai ' . $end .'.pdf', array('Attachment' => true));
    }

    public function printTicketTabuhan()
    {
        return view('admin/pages/eticketing/report/report-tabuhan');
    }

    public function printTicketMustikaConservasi()
    {
        return view('admin/pages/eticketing/report/report-mustika-conservasi');
    }
}
