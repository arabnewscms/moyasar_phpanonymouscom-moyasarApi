<?php
namespace Moyasarphpanonymouscom\MoyasarApi\Moyasar;
use GuzzleHttp;
use Moyasarphpanonymouscom\MoyasarApi\Moyasar\HttpRequestNotFound;
//use Moyasarphpanonymouscom\MoyasarApi\MoyasarFaced;

class Client // extends MoyasarFaced
{

//    const base_uri = "https://api.moyasar.com/{version}";

    public static $apiKey;

    /**
     * @param mixed $apiKey
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    public static function get($request, $options = [])
    {
        $options[GuzzleHttp\RequestOptions::AUTH] = [self::$apiKey, ''];
        $client = new GuzzleHttp\Client();
        $response = $client->get($request, $options);
        if ($response->getStatusCode() == '200' OR '201') {
            return $response->getBody()->getContents();
        }
        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }


    public static function post($request, $options = [])
    {
        $client = new GuzzleHttp\Client();

        $data = [
            GuzzleHttp\RequestOptions::AUTH => [self::$apiKey, ''],
            GuzzleHttp\RequestOptions::FORM_PARAMS => $options,
            GuzzleHttp\RequestOptions::DEBUG => false
        ];
        $response = $client->post($request, $data);
        if ($response->getStatusCode() == '200' OR '201') {
            return $response->getBody()->getContents();
        }
        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }


}