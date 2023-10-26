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

    //prendo l'array creato nel config e lo assegno a una variabile
    
    $arrayComics = config('arrayComics');

    $arrayDetails = config('comicsUtilities');

    return view('pages.comics', compact('arrayComics', 'arrayDetails'));
});

Route::get('/comic', function () {
    return view('pages.comicDetail');
});






