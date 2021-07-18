<?php

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
    $data = [
        "navbar" => [
        
            "characters",
            "comics",
            "movies",
            "tv", 
            "games",
            "collectibles",
            "videos",
            "fans",
            "news",
            "shop"
        ],
        "propriety" => [
            "digital comics",
            "dc merchandise",
            "subscription",
            "comic shop locator",
            "dc power visa"
        ]
    ];
    $dataComics = config("dataComics");

    return view('home', $data, 
    [
        "comics" => $dataComics,
    ]);
});
