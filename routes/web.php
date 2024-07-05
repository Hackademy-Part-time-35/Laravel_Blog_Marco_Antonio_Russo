<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;
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
    Route::resource('categories', CategoryController::class);
    Route::delete("categories", [CategoryController::class,"destroyFromMultiselect"])->name("categories.destroyFromMultiselect");
        
    Route::resource("books", BooksController::class, [
        "exept" => ["show"]
    ]);

});

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