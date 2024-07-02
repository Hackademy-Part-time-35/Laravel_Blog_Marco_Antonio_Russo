<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    private $lorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem   minus, sint officia quis odit quisquam asperiores, ut aut.";

    private $articles;


    public function __construct(){
        $this->articles = Article::all();
    }

    public function articles(){
        
        return view('articles.articles',
        ["title" => "articoli","articles" => $this->articles]);
    }

    public function article(Article $article){

        return view("articles.article",["article"=> $article]);
    }

    public function create(){
        return view("articles.create-article");
    }

    public function store(StoreArticleRequest $request){
        $article = Article::create($request->all());

        if($request->hasFile("image") && $request->file("image")->isValid()){
            $imgName = "img_" . uniqid() . "." . $request->file("image")->extension();
            $imgPath = "public/images/" . $article->id;
            

            $article->image = $request->file("image")->storeAs($imgPath,$imgName);;
            $article->save();
            
        }

        return redirect()->back()->with("success","Articolo creato correttamente");
    }
}
