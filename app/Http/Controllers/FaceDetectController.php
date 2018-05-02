<?php

namespace App\Http\Controllers;

use App\FaceDetect;
use App\Http\Traits\FaceDetectApi;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class FaceDetectController extends Controller
{
    use FaceDetectApi;

    public function index(Request $request)
    {

        if ($request->hasFile('imgUpload')) {

            $validator = Validator::make($request->all(), [
                'imgUpload' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors());
            }

            return response()->json($this->faceDetect($request->file('imgUpload')));
        }


        $this->validate($request, [
            'url' => ['regex:([^\s]+(\.(?i)(jpg|png|jpeg))$)', 'required']
        ]);
//		if ( $validator->fails() ) {
//			return response()->json( $validator->errors() );
//		}

        return response()->json($this->faceDetect($request->url));
    }


    public function store(Request $request)
    {
        return FaceDetect::create([
            'data' => collect($request->data),
            'ip' => $request->ip(),
            'image' => collect($request->data)['image']
        ]);


    }
}
