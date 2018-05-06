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

		$women     = array();
		$male      = array();
		$age_women = array();
		$age_male  = array();
		$response  = array();
		$data      = array();
		$faces     = FaceDetect::all();

		foreach ( $faces as $face ) {
			foreach ( $face['data'] as $f ) {

				if ( $f['gender'] == 'زن' ) {
					$women[]     = $f['gender'];
					$age_women[] = $f['age'];
				}

				if ( $f['gender'] == 'مرد' ) {
					$male[]     = $f['gender'];
					$age_male[] = $f['age'];
				}

				$response['total']       = count( $f );
				$response['women_count'] = count( $women );
				$response['male_count']  = count( $male );
				$response['age_male']    = $age_male;
				$response['age_women']   = $age_women;
			}
		}


		$data['total']         = $response['total'];
		$data['women_count']   = $response['women_count'];
		$data['male_count']    = $response['male_count'];
		$data['age_male_max']  = max( $response['age_male'] );
		$data['age_male_min']  = min( $response['age_male'] );
		$data['age_male_avg']  = array_sum( $response['age_male'] ) / $data['male_count'];
		$data['age_women_max'] = max( $response['age_women'] );
		$data['age_women_min'] = min( $response['age_women'] );
		$data['age_women_avg'] = array_sum( $response['age_women'] ) / $data['women_count'];

		if (request()->wantsJson()){
			return response()->json($data);
		}

		return view( 'layouts.dashboard.index',compact('data') );
	}

}
