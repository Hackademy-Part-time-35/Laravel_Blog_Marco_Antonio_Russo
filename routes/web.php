<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BooksController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;




Route::get('/', [PageController::class, "home"])->name("homepage");

Route::get('/articoli', [ArticlesController::class, "articles"])->name("articles");
Route::get("articoli/{article}", [ArticlesController::class, "article"])->name("article");
Route::get("/db", [ArticlesController::class,"insertRecord"])->name("database.article");

Route::get('/chi-siamo', [PageController::class, "aboutUs"])->name("aboutUs");

Route::get('/contatti', [ContactController::class, "contactsGet"])->name("contacts");

Route::post('/contatti', [ContactController::class,'contactsPost'])->name('contacts.post');

Route::get('/conta-stringa', [PageController::class, "countString"])->name("count.string");
Route::post('/conta-stringa', [PageController::class,'countStringSend'])->name('count.string.send');

Route::get('/libri', [BooksController::class,'books'])->name('books');
Route::get("libri/db", [BooksController::class,"insertRecord"])->name("database.book");
Route::get("/libri/{book}", [BooksController::class, "book"])->name("book");

