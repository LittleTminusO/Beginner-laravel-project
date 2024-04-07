<?php

use App\Http\Controllers\Api\V1\CatController;
use App\Http\Controllers\Api\V1\CompleteCatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/cats', CatController::class);
    Route::patch('/cats/{cat}/complete', CompleteCatController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
