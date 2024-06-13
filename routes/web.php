<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {   // HOMEPAGE
    $title = "Blog Laravel Marco";
    return view('welcome',
    ["title" => $title]);
})->name("homepage");



Route::get('/articoli', function () {   // ARTICOLI
    $title = "Blog Laravel Marco";
    $lorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem   minus, sint officia quis odit quisquam asperiores, ut aut.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iste asperiores quam, accusantium est obcaecati quasi sequi aliquam quibusdam possimus itaque libero rem nostrum soluta. Et vitae autem voluptate numquam?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam dicta sunt quaerat commodi aperiam aliquid sed? Suscipit culpa deserunt velit sed placeat nulla facilis. Veritatis minus temporibus animi? Earum?";

    $articles = [
        ["title" => "titolo 1", "category" => "action", "description" => $lorem],
        ["title" => "titolo 2", "category" => "fantasy", "description" => $lorem],
        ["title" => "titolo 3", "category" => "animation", "description" => $lorem],
        ["title" => "titolo 4", "category" => "thriller", "description" => $lorem],
    ];

    // $articles = [];
    
    return view('pages.articles',
    ["title" => $title,"articles" => $articles]);
})->name("articles");



Route::get("articles/{id}", function ($id) {    // SINGOLO ARTICOLO
    $lorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem   minus, sint officia quis odit quisquam asperiores, ut aut.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iste asperiores quam, accusantium est obcaecati quasi sequi aliquam quibusdam possimus itaque libero rem nostrum soluta. Et vitae autem voluptate numquam?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam dicta sunt quaerat commodi aperiam aliquid sed? Suscipit culpa deserunt velit sed placeat nulla facilis. Veritatis minus temporibus animi? Earum?";

    $articles = [
        ["title" => "titolo 1", "category" => "action", "description" => $lorem ],
        ["title" => "titolo 2", "category" => "action", "description" => $lorem ],
        ["title" => "titolo 3", "category" => "action", "description" => $lorem ],
        ["title" => "titolo 4", "category" => "action", "description" => $lorem ],
    ];

    $article = $articles[$id];
    return view("pages.article",["article"=> $article]);
})->name("article");


Route::get('/contatti', function () {   // CONTATTI
    $title = "Blog Laravel Marco";

    return view('pages.contacts',
    ["title" => $title]);
})->name("contacts");



Route::get('/chi-siamo', function () {  // CHI SIAMO
    $title = "Blog Laravel Marco";

    define("US","Alunni di Aulab");

    $marco = new stdClass();
    $marco->name = "Marco Antonio Russo";
    $marco->aboutUsDescription = "Aspirante WEB Developer";
    $marco->img = "/img/edited.jpg";

    return view('pages.aboutUs',
    [
    "US" => US,
    "marco" => $marco,
    "title" => $title,
    ]);
})->name("aboutUs");

