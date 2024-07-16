<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("articles", [ArticlesController::class, "getArticlesAPI"]);
