<?php

namespace App\Http\Controllers;

use App\FaceDetect;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.index');
    }

}
