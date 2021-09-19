<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherAPIController extends Controller
{
    public function weatherData() {
        $API_KEY = config('services.openweathermap.key');
        $base_url = config('services.openweathermap.url');
        $param = 'zip=870-0142,JP';

        $url = "$base_url?$param&APPID=$API_KEY";
        
        // 接続
        $client = new Client();

        $method = "GET";
        $response = $client->request($method, $url);

        $posts = $response->getBody();
        $posts = json_decode($posts, true);

        return response()->json($posts);
    }
}
