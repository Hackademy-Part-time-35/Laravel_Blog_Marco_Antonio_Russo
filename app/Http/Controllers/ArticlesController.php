<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    private $lorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem   minus, sint officia quis odit quisquam asperiores, ut aut.";

    private $articles;


    public function __construct(){
        $this->articles = Article::all();
    }
    public function insertRecord(){
        Article::create([
            "title" => "titolo 4", 
            "category" => "action", 
            "description" => $this->lorem, 
            "visible" => true
        ]);
    }

    public function articles(){
        
        return view('pages.articles',
        ["title" => "articoli","articles" => $this->articles]);
    }

    public function article(Article $article){

        return view("pages.article",["article"=> $article]);
    }
}
