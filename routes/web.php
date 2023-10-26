<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    $arrayComics = config('arrayComics');

    return view('pages.comics', compact('arrayComics'));
});

Route::get('/comic', function () {
    return view('pages.comicDetail');
});






