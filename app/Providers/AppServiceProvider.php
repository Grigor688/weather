<?php

namespace App\Providers;

use App\Repository\WeatherRepository;
use App\Repository\WeatherRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(WeatherRepositoryInterface::class, WeatherRepository::class);
    }
}
