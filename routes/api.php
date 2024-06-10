<?php

use App\Http\Controllers\ParkingLotController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(ParkingLotController::class)
    ->prefix('spot')
    ->group(function () {
        Route::get('/list', 'list');
        Route::group(['prefix' => '{id}'], function () {
            Route::post('/park', 'park');
            Route::post('/unpark', 'unpark');
        });
    });
