<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherAPIController extends Controller
{
    public function weatherData() {
        $API_KEY = config('services.openweathermap.key');
        $base_url = config('services.openweathermap.url');
        $city = 'Tokyo';

        $url = "$base_url?units=metric&q=$city&APPID=$API_KEY";
        
        // 接続
        $client = new Client();

        $method = "GET";
        $response = $client->request($method, $url);

        $posts = $response->getBody();
        $posts = json_decode($posts, true);

        return response()->json($posts);
    }
}
