<?php

namespace App\Http\Controllers;

use App\FaceDetect;
use Illuminate\Http\Request;

class DashboardController extends Controller {

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$response = array();
//		$faces    = json_decode( FaceDetect::all(), true );
		$faces = FaceDetect::all();

//		$faces = $faces->map(function ($item, $key) use ($response) {
//			$response []= $item->data;
//		});

		foreach ( $faces as  $face ) {
			foreach ($face['data'] as $f){
				$response[] = $f['gender'] == 'زن' ? ['women'=>$f['gender']]:['men'=>$f['gender']];
//				$response['total'] = count($f);
//				$response['women'] = ;
//				$response['man'] = count($f);
			}

		}
		dd($response);

		return view( 'layouts.dashboard.index' );
	}

}
