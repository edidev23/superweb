<?php

namespace App\Http\Controllers\Admin\Eticketing;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class EticketingUsersController extends Controller
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
    public function request(Request $request)
    {
        $start = $request->start ? $request->start : Date("Y-m-d", strtotime("-7 days"));
        $end = $request->end ? $request->end : Date("Y-m-d");

        return view('admin/pages/eticketing/eticketing-users/request', compact('start', 'end'));
    }

    public function manage(Request $request)
    {
        $start = $request->start ? $request->start : Date("Y-m-d", strtotime("-7 days"));
        $end = $request->end ? $request->end : Date("Y-m-d");

        return view('admin/pages/eticketing/eticketing-users/manage', compact('start', 'end'));
    }

    public function tracking()
    {
        return view('admin/pages/eticketing/eticketing-users/tracking');
    }

    
}
