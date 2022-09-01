<?php

use App\Http\Controllers\Dashboard\CandidateController;
use App\Http\Controllers\Dashboard\CarrouselController;
use App\Http\Controllers\Dashboard\NationalCommitteeController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Web\BlogNewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login/index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::resource('candidates', CandidateController::class)->middleware(['auth', 'admin']);
Route::resource('carrousel', CarrouselController::class)->middleware(['auth', 'admin']);
Route::resource('nationalcommittees', NationalCommitteeController::class)->middleware(['auth', 'admin']);
Route::resource('news', NewsController::class)->middleware(['auth']);

/*--------- Rutas parte web ---------------*/
Route::group(['prefix' => 'blog'], function(){
    Route::controller(BlogNewsController::class)->group(function(){
        Route::get('/', "index")->name("web.blog.news.index");
        Route::get('/{news}', "show")->name("web.blog.news.show");
    });
});

require __DIR__.'/auth.php';
