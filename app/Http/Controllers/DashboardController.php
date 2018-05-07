<?php

namespace App\Http\Controllers;

use App\FaceDetect;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

		$faces = FaceDetect::all();

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

				$response['total']       = count( $faces );
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

		if ( request()->wantsJson() ) {
			return response()->json( $data );
		}

		$charts = $this->chart();

		return view( 'layouts.dashboard.index', compact( 'data', 'charts' ) );
	}

	public function chart() {

		$data   = array();
		$charts = FaceDetect::select( [ 'data', 'created_at' ] )->get( [
			'data',
			'created_at'
		] )->groupBy( function ( $date ) {
			return Carbon::parse( $date->created_at )->format( 'm' );
		} )->toArray();

		foreach ( $charts as $key => $face ) {

			foreach ( $face as $index => $f ) {
				foreach ( $f['data'] as $i => $item ) {
					$age [ $key ][] = $item['age'];
				}
				$data[] = [
					'age_max' => max( $age[ $key ] ),
					'age_min' => min( $age[ $key ] ),
					'age_avg'     =>intval(array_sum( [ max( $age[ $key ] ), min( $age[ $key ] ) ] ) / 2),
					'key'=>''
				];

			}

		}

		return $data;

	}

}
