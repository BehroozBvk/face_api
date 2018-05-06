<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaceDetect extends Model {
	protected $fillable = [ 'data', 'ip', 'image' ];
	protected $casts = [ 'data' => 'array' ];

	public function setImageAttribute( $value ) {
		if ( substr( $value, 0, 1 ) == '{' ) {
			$value                     = json_decode( $value, true );
			$this->attributes['image'] = $value['url'];
		} else {
			$this->attributes['image'] = $value;
		}
	}

	public function getImageAttribute( $value ) {
		if ( preg_match( '/^(http|https):\\/\\/[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}' . '((:[0-9]{1,5})?\\/.*)?$/i', $value ) ) {
			return $value;
		} else {
			return url( 'uploads' ) . '/' . $value;
		}
	}

}
