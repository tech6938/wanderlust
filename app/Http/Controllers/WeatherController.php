<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $weatherResponse=[];
        $weatherResponse['error']= false;

        if ($request->isMethod("post")) {

            $cityName = $request->input('city');
                $response = Http::withHeaders([
                    "X-RapidAPI-Host" => "open-weather13.p.rapidapi.com",
                    "X-RapidAPI-Key" => "34fdf2be7cmsh77030fe6afd07ebp11717bjsn8b2f361a88b0"
                ])->get("https://open-weather13.p.rapidapi.com/city/{$cityName}/EN");
                     // Print the response from the API
                // echo "<pre>";
                $weatherResponse=$response->json();
        }
        return view('Weather', ["data"=> $weatherResponse]);
    }
}
