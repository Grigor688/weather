<?php
namespace App\Repository;
use http\Client\Response;
use Illuminate\Support\Facades\Http;
class WeatherRepository implements WeatherRepositoryInterface {
    public function getWeatherForPlace(string $placeName): array
    {
        $weather = config('admin.weather');
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$placeName}&appid={$weather}&units=metric");
        return $response->json();
    }
}
