<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Mail\newArticleCreated;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;

class ArticlesController extends Controller
{


    private $articles;


    public function __construct(){
        $this->articles = Article::all();
    }

    public function index(){
        return view("articles.index",["title"=> "Articoli", "articles" => $this->articles]);
    }

    public function create(){


        return view("articles.create", [
            "categories" => Category::all(),
            "articles" => Article::all(),
            "title"=> "Crea Articolo",
        ]);
    }

    public function store(StoreArticleRequest $request){
        $article = Article::create($request->all());

        // Mail::to("example@example.com")->send(new newArticleCreated(
        //     $request->title, 
        //     auth()->user()->email
        // ));

        if($request->hasFile("image") && $request->file("image")->isValid()){
            $imgName = "img_" . uniqid() . "." . $request->file("image")->extension();
            $imgPath = "public/images/" . $article->id;
            

            $article->image = $request->file("image")->storeAs($imgPath,$imgName);;
            $article->save();
            
        }

        return redirect()->back()->with("success","Articolo creato correttamente");
    }

    public function show(Article $article){
        return view("articles.show",["article"=> $article]);
    }


    public function edit(Article $article){
        return  view("articles.edit",["title"=> "Modifica Articolo","article"=> $article, "categories" => Category::all()]);
    }

    public function articles(){
        
        return view('articles.articles',
        ["title" => "articoli","articles" => $this->articles]);
    }

 


    public function update(StoreArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return redirect()->route("articles.index")->with("success","Articolo modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back();
    }

}
