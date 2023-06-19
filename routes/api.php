<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TourController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Admin\TravelController;

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

Route::get('/travels',[TravelController::class,'index']);
Route::get('/travels/{travel:slug}/tours',[TourController::class,'index']);

Route::prefix('admin')->middleware('auth:sanctum')->group(function () {

    Route::middleware(['role:admin'])->group(function () {
        Route::post('travels',[TravelController::class,'store']);
    });

    Route::put('travels/{travel}',[TravelController::class,'update']);
});

Route::post('login',LoginController::class);
