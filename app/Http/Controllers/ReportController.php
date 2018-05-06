<?php

namespace App\Http\Controllers;

use App\FaceDetect;
use Illuminate\Http\Request;

class ReportController extends Controller {

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function reports() {
		// check request is ajax and return all face records database
		if ( request()->wantsJson() ) {
			return response()->json( FaceDetect::paginate(3) );
		}

		return view( 'layouts.dashboard.reports.reports' );
	}

}
