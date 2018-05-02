<?php
/**
 * Created by PhpStorm.
 * User: Bvk
 * Date: 16/04/2018
 * Time: 05:08 PM
 */

namespace App\Http\Traits;

use App\FaceDetect;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * Trait FaceDetectApi
 * @package App\Http\Traits
 */
trait FaceDetectApi
{

    /**
     * @var string
     */
    protected $endpoint;
    /**
     * @var mixed
     */
    protected $key;

    /**
     * FaceDetectApi constructor.
     */
    public function __construct()
    {
        $this->endpoint = 'https://westcentralus.api.cognitive.microsoft.com/face/v1.0/';
        $this->key = env('MICROSOFT_FACE_API_kEY_1');
    }

    /**
     * @param $url
     *
     * @return string
     */
    public function faceDetect($img)
    {

        $request = new \HTTP_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/detect');
        $url = $request->getUrl();

        if (is_file($img)) {
            $content_type = 'application/octet-stream';
            $file = $img;
            $name = time() . '_' . $file->getClientOriginalName();
            $path = public_path() . '/uploads/';
            $file->move($path, $name);
            $img = fopen($path . $name, 'rb');
        } else {
            $content_type = 'application/json';
            $img = '{"url": "' . $img . '"}';
        }

        $headers = array(
            'Content-Type' => $content_type,
            'Ocp-Apim-Subscription-Key' => $this->key,
        );

        $request->setHeader($headers);

        $parameters = array(
            'returnFaceId' => 'true',
            'returnFaceLandmarks' => 'false',
            'returnFaceAttributes' => 'age,gender,glasses,emotion,makeup',
        );

        $url->setQueryVariables($parameters);

        $request->setMethod(\HTTP_Request2::METHOD_POST);
        $request->setBody($img);

        try {
            $response = $request->send();
            $image = isset($name) ? $name:$img;
            return $this->detectProcess($response->getBody(),$image);
//            return $response->getBody();
        } catch (\HttpException $ex) {
            return $ex;
        }

    }

    /**
     * @param $faces
     */
    public function detectProcess($faces,$image)
    {

        $data = array();
        $collection = collect(json_decode($faces, true));
        $collection = $collection->map(function ($item, $key) use ($data) {
            $data['faceRectangle'] = $item['faceRectangle'];
            $data['gender'] = $this->gender($item['faceAttributes']['gender']);
            $data['age'] = $this->age($item['faceAttributes']['age']);
            $data['glasses'] = $this->glasses($item['faceAttributes']['glasses']);
            $data['emotion'] = $this->emotion($item['faceAttributes']['emotion']);
            $data['makeup'] = $this->makeup($item['faceAttributes']['makeup']);


            return $data;
        });
        $collection = array_add($collection,'image',$image);
        return $collection;


    }

    /**
     * @param $attributes
     */
    public function faceAttributes($attributes)
    {
        return $attributes;
    }

    public function hairAttributes($attributes)
    {

    }

    /**
     * @param $attributes
     */
    public function gender($attributes)
    {

        return $attributes == 'female' ? 'زن' : 'مرد';
    }

    public function age($attributes)
    {
        return (integer)($attributes);
    }

    public function glasses($attributes)
    {
        switch ($attributes) {
            case 'NoGlasses':
                return 'بدون عینک';
                break;
            case 'ReadingGlasses':
                return 'عینک مطالعه';
                break;
            case 'Sunglasses':
                return 'عینک آفتابی';
                break;
            case 'SwimmingGoggles':
                return 'عینک شنا';
                break;
        }
    }

    public function makeup($attributes)
    {
        $makeup = array();
        if ($attributes['eyeMakeup'] == true) {
            $makeup['eyeMakeup'] = 'دارد';
        } else {
            $makeup['eyeMakeup'] = 'ندارد';
        }
        if ($attributes['lipMakeup'] == true) {
            $makeup['lipMakeup'] = 'دارد';
        } else {
            $makeup['lipMakeup'] = 'ندارد';
        }

        return $makeup;
    }

    /**
     * @param $attributes
     */
    public function emotion($attributes)
    {

        switch (array_first(array_keys($attributes, max($attributes)))) {
            case 'neutral':
                return 'خنثی';
                break;
            case 'anger':
                return 'عصبانی';
                break;
            case 'contempt':
                return 'حقارت';
                break;
            case 'disgust':
                return 'نفرت';
                break;
            case 'fear':
                return 'ترس،هراس';
                break;
            case 'happiness':
                return 'شاد';
                break;
            case 'sadness':
                return 'غمگین';
                break;
            case 'surprise':
                return 'متعحب';
                break;
        }
    }

}