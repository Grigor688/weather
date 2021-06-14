<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherRequest;
use App\Repository\WeatherRepository;
use App\Service\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function index(WeatherRequest $request){
        return $this->weatherService->getWeatherData($request->placeName);
    }
}
