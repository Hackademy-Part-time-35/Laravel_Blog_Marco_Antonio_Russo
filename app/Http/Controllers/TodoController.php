<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    function todo(){
        return view("pages.todo", ["title" => "TODO"]);
    }
}
