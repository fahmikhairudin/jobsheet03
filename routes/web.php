<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\HalamanHomeController;
use App\Http\Controllers\HalamanProductController;
use App\Http\Controllers\HalamanNewsController;
use App\Http\Controllers\HalamanProgramController;
use App\Http\Controllers\HalamanAboutUsController;

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

//praktikum1
//no1
Route::get('/home', [HomeController::class, 'index']);
//no2 dan 4
Route::prefix('/category')->group(function(){
    Route::get('product', [ProductController::class, 'index']);
    Route::get('program', [ProgramController::class, 'index']);
});

//no3
Route::get('/news/{title}', [NewsController::class, 'index'])->name('news');

//no4
Route::get('program', [ProgramController::class, 'index']);

//no5
Route::get('/about-us', [AboutController::class, 'index']);

//no6
Route::resource('/contact-us', ContactController::class, [
    'only' => ['index']
]);

//praktikum2
Route::get('/', function(){
    return view('layouts.master');
});
Route::get('/HalamanHome', function(){
    return view('HalamanHome');
});
Route::get('/HalamanProduct', function(){
    return view('HalamanProduct');
});
Route::get('/HalamanNews', function(){
    return view('HalamanNews');
});
Route::get('/HalamanProgram', function(){
    return view('HalamanProgram');
});
Route::get('/HalamanAboutUs', function(){
    return view('HalamanAboutUs');
});