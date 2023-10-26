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

    $dcComicsLinks = ['Characters','Comics', 'Movies','TV','Games', 'Videos', 'News'];
    $shopLinks = ['Shop DC', 'Shop DC Collectibles'];
    $dcLinks = ['Terms Of Use', 'Privacy Policy (New)', 'Add Choices', 'Advertising', 'Jobs', 'Subscription', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
    $sitesLinks = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];

    return view('pages.comics', compact('arrayComics', 'arrayDetails', 'dcComicsLinks', 'shopLinks', 'dcLinks', 'sitesLinks'));
});

Route::get('/comic', function () {
    return view('pages.comicDetail');
});






