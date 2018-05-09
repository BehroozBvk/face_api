<?php

namespace App\Http\Controllers;

use App\FaceDetect;
use App\Http\Traits\FaceDetectApi;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class FaceDetectController extends Controller {
	use FaceDetectApi; // Proccess Face detect By this Trait

	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index( Request $request ) {
		// check file upload on client
		if ( $request->hasFile( 'imgUpload' ) ) {

			//  validation data input file
			$validator = Validator::make( $request->all(), [
				'imgUpload' => 'required',
			] );

			// return errors response as json
			if ( $validator->fails() ) {
				return response()->json( $validator->errors() );
			}

			return response()->json( $this->faceDetect( $request->file( 'imgUpload' ) ) );
		}

		// check url image input and validation extention image mime type
		$this->validate( $request, [
			'url' => [ 'regex:([^\s]+(\.(?i)(jpg|png|jpeg))$)', 'required' ]
		] );

		return response()->json( $this->faceDetect( $request->url ) );
	}

	/**
	 * save data face detect api to database
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store( Request $request ) {

		$save = FaceDetect::create( [
			'data'  => collect( $request->data['result'] ),
			'ip'    => $request->ip(),
			'image' => collect( $request->data )['image']
		] );

		if ( $save ) {
			return response()->json( [ 'message' => 'save data success.' ] );
		}

		return response()->json( [ 'error' => 'not save data.' ] );


	}
}
