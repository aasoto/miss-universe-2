<?php

use App\Http\Controllers\Api\CandidateController;
use App\Http\Controllers\Api\CarrouselController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\NationalCommitteeController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('nationalcommittee/countries', [NationalCommitteeController::class, 'countries']);
Route::get('country/{country}/nationalcommittees', [CountryController::class, 'nationalcommittees']);

/** Protección de rutas por medio de Laravel Sanctum */
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('nationalcommittee', NationalCommitteeController::class)->except(['create', 'edit']);
    Route::resource('candidate', CandidateController::class)->except(['create', 'edit']);
    Route::resource('news', NewsController::class)->except(['create', 'edit']);
    Route::resource('carrousel', CarrouselController::class)->except(['create', 'edit']);
});


//usuarios
//Route::post('user/login', [UserController::class, 'login']);
