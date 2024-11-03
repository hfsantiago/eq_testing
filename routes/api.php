<?php
use App\Http\Controllers\Api\IndicatorsController;

Route::get('/indicators', [IndicatorsController::class, 'index']);