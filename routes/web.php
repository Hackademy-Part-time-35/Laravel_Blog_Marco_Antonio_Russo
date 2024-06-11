<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "Blog Laravel Marco";
    return view('welcome',
    ["title" => $title]);
});

Route::get('/articoli', function () {
    $title = "Blog Laravel Marco";

    return view('articles',
    ["title" => $title]);
});

Route::get('/contatti', function () {
    $title = "Blog Laravel Marco";

    return view('contacts',
    ["title" => $title]);
});

Route::get('/chi-siamo', function () {
    $title = "Blog Laravel Marco";

    define("US","Alunni di Aulab");

    $marco = new stdClass();
    $marco->name = "Marco Antonio Russo";
    $marco->aboutUsDescription = "Aspirante WEB Developer";
    $marco->img = "/img/edited.jpg";

    return view('aboutUs',
    [
    "US" => US,
    "marco" => $marco,
    "title" => $title,
    ]);
});