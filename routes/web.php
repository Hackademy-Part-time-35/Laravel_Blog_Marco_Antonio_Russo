<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BooksController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;



// Home
Route::get('/', [PageController::class, "home"])->name("homepage");


// Articles
Route::get('/articoli', [ArticlesController::class, "articles"])->name("articles");
Route::get("articoli/crea", [ArticlesController::class, "create"])->name("article.create");
Route::post("articoli/crea", [ArticlesController::class,"store"])->name("article.store");
Route::get("articoli/{article}", [ArticlesController::class, "article"])->name("article");

// About Us
Route::get('/chi-siamo', [PageController::class, "aboutUs"])->name("aboutUs");

// Contacts
Route::get('/contatti', [ContactController::class, "contactsGet"])->name("contacts");
Route::post('/contatti', [ContactController::class,'contactsPost'])->name('contacts.post');

// String Count
Route::get('/conta-stringa', [PageController::class, "countString"])->name("count.string");
Route::post('/conta-stringa', [PageController::class,'countStringSend'])->name('count.string.send');


// Books
Route::get('/libri', [BooksController::class,'books'])->name('books');
Route::get('/libri/crea', [BooksController::class, "create"])->name("book.create");
Route::post("libri/crea", [BooksController::class,"store"])->name("book.store");
Route::get("/libri/{book}", [BooksController::class, "book"])->name("book");
