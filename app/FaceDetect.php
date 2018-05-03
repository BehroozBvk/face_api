<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaceDetect extends Model {
	protected $fillable = [ 'data', 'ip', 'image' ];

	public function setImageAttribute( $value ) {
		if ( substr( $value, 0, 1 ) == '{' ) {
			$value                     = json_decode( $value, true );
			$this->attributes['image'] = $value['url'];
		}else{
			$this->attributes['image'] = $value;
		}
	}
}
