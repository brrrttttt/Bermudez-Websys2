<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\MapController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather-multi', [WeatherController::class, 'getWeatherForThreeCities']);

Route::get('/map', [MapController::class, 'showMap']);