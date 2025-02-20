<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MathController;
Route::get('/{operation1}/{val1}/{val2}/{operation2}/{val3}/{val4}', [MathController::class, 'calculate']); //kinukuha ng route na to yung dalawang math operations pati yung value niya tas dinadaan sa MathController para ma calculate.
