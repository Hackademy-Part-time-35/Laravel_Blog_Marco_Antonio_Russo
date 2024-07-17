<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Models\Book;

// Home
Route::get('/', [PageController::class, "home"])->name("homepage");




// About Us
Route::get('/chi-siamo', [PageController::class, "aboutUs"])->name("aboutUs");

// Contacts
Route::get('/contatti', [ContactController::class, "contactsGet"])->name("contacts");
Route::post('/contatti', [ContactController::class,'contactsPost'])->name('contacts.post');

// String Count
Route::get('/conta-stringa', [PageController::class, "countString"])->name("count.string");
Route::post('/conta-stringa', [PageController::class,'countStringSend'])->name('count.string.send');



// Account
Route::prefix("dashboard")->middleware("auth")->group(function () {
    Route::get("/", [AccountController::class,"account"])->name("account");


    Route::resource("articles", ArticlesController::class, [
        "exept" => ["show"]
    ]);
    Route::delete("articles", [ArticlesController::class,"destroyFromMultiselect"])->name("articles.destroyFromMultiselect");


    Route::resource('categories', CategoryController::class);
    Route::delete("categories", [CategoryController::class,"destroyFromMultiselect"])->name("categories.destroyFromMultiselect");
        
    Route::resource("books", BooksController::class, [
        "exept" => ["show"]
    ]);

});


// Anime
Route::get("/anime", [AnimeController::class, "index"])->name("anime.index");
Route::get("/anime/{genre}/{name}", [AnimeController::class, "animeByGenre"])->name("anime.byGenre");
Route::get("/anime/{genre_id}/{name}/{anime_id}", [AnimeController::class, "animeById"])->name("anime.byId");

// Products
Route::post("/product/store/{id}/{name}", [ProductController::class , "store"])->name("product.store");
Route::get("product/index", [ProductController::class, "index"])->name("product.index");
Route::get("product/{item}/edit", [ProductController::class, "edit"])->name("product.edit");
Route::put("product/update/{product}", [ProductController::class, "update"])->name("product.update");

// Categories
Route::post("dashboard/articles/create", [CategoryController::class,"storeFromArticles"])->name("categories.storeFromArticles");


// Articles
Route::get('/articoli', [ArticlesController::class, "articles"])->name("articles");
Route::get("articles/show/{article}", [ArticlesController::class,"show"])->name("articles.show");

// Books
Route::get('/books', [BooksController::class,'books'])->name('books');
Route::get("/books/{book}", [BooksController::class, "show"])->name("books.show");

// User
Route::put('users/{id}', [UserController::class,'update'])->name('user.update');

// Show API
Route::get("/showAPI", [PageController::class, "showAPI"])->name("show.api");