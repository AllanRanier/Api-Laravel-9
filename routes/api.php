<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    SeriesController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/series', [SeriesController::class, 'index']);
Route::post('/series', [SeriesController::class, 'store']);
Route::get('/series/show/{id}', [SeriesController::class, 'show']);
Route::post('/series/update/{id}', [SeriesController::class, 'update']);
Route::delete('/series/delete/{id}', [SeriesController::class, 'destroy']);
