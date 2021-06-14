<?php
namespace App\Service;

use App\Repository\WeatherRepository;
use App\Repository\WeatherRepositoryInterface;

class WeatherService{
    public function __construct(WeatherRepositoryInterface $weatherRepository)
    {
        $this->weatherRepository = $weatherRepository;
    }

    public function getWeatherData(string $placeName){
       $data = $this->weatherRepository->getWeatherForPlace($placeName);
       $name = $data['name'];
       $pressure = $data['main']['pressure'];
        $humidity = $data['main']['humidity'];
        $temp = $data['main']['temp'];
       return view('weathers.widget')->with(compact('pressure', 'humidity', 'temp', 'name'))->render();

    }

}
