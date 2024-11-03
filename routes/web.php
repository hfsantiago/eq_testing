<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\IndicatorsController;

Route::get('/indicators', [IndicatorsController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});