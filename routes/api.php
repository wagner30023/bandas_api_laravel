<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\BandController;


Route::get('bands',[BandController::class,'getAll']);
Route::post('bands/store',[BandController::class,'store']);
Route::get('bands/gender/{gender}',[BandController::class,'getBandsByGender']);
Route::get('bands/{id}',[BandController::class,'getById']);
