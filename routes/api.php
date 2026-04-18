<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CatalogApiController;
use App\Http\Controllers\Api\ScheduleApiController;

// Public Catalog API
Route::get('/catalog', [CatalogApiController::class, 'index']);
Route::get('/catalog/{catalog}', [CatalogApiController::class, 'show']);

// Public Schedule API
Route::get('/schedule/today', [ScheduleApiController::class, 'today']);
Route::get('/schedule/current', [ScheduleApiController::class, 'current']);
Route::get('/schedule/weekly', [ScheduleApiController::class, 'weekly']);

