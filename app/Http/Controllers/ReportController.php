<?php

namespace App\Http\Controllers;

use App\FaceDetect;
use Illuminate\Http\Request;

class ReportController extends Controller
{
	public function reports()
	{
		$faces = FaceDetect::all();
		dd(json_decode($faces[1]['data']));
		return view('layouts.dashboard.reports.reports',compact('faces'));
	}
}
