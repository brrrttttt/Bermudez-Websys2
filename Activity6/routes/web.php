<?php
use App\Http\Controllers\PersonalInfoController;
use Illuminate\Support\Facades\Route;

Route::get('personal-info', [PersonalInfoController::class, 'form'])->name('personal-info');
Route::post('personal-info', [PersonalInfoController::class, 'handleform']);
Route::post('/output', [PersonalInfoController::class, 'handleform']);