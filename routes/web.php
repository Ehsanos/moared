<?php

use App\Http\Controllers\Theme\AboutController;
use App\Http\Controllers\Theme\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Theme\IndexController;
use App\Http\Controllers\Theme\NewsController;

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

Route::get('/welcome', function () {
    return view('theme.index');
});
Route::name('theme.')->middleware('locale')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::get('/about',[AboutController::class,'index'])->name('about');
    Route::get('/contact',[ContactController::class,'index'])->name('contact');
    Route::get('/news',[NewsController::class,'index'])->name('news');
    Route::get('/show/{id}',[NewsController::class,'show'])->name('show.news');

});


//Route::group(['middleware' =>])
