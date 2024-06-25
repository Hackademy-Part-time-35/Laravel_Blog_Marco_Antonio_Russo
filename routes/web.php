<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;



Route::get('/', [PageController::class, "home"])->name("homepage");

Route::get('/articoli', [PageController::class, "articles"])->name("articles");

Route::get("articoli/{id}", [PageController::class, "article"])->name("article");

Route::get('/chi-siamo', [PageController::class, "aboutUs"])->name("aboutUs");

Route::get('/contatti', [ContactController::class, "contactsGet"])->name("contacts");

Route::post('/contatti', [ContactController::class,'contactsPost'])->name('contacts.post');