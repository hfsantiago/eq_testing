<?php
use App\Http\Controllers\Api\IndicatorsController;

Route::get('/indicators', [IndicatorsController::class, 'index']);
Route::get('/indicators/{id}', [IndicatorsController::class, 'show']);
Route::post('/indicators', [IndicatorsController::class, 'create']);
Route::put('/indicators/{id}', [IndicatorsController::class, 'update']);
Route::delete('/indicators/{id}', [IndicatorsController::class, 'destroy']);