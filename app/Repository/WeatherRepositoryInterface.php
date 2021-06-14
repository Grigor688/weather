<?php
namespace App\Repository;

interface WeatherRepositoryInterface{
    public function getWeatherForPlace(string $placeName): array;

}
