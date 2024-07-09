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
    private const SUPER_USER = 1;

    public function __construct(){
        $this->articles = Article::all();
    }

    private function isSuperUser(){
        return auth()->user()->id === self::SUPER_USER;
    }

    public function index(){

        if($this->isSuperUser()){
            $articles = Article::all();
        }else {
            $articles = auth()->user()->articles;
        }

        return view("articles.index",["title"=> "Articoli", "articles" => $articles]);
    }

    public function articles(){
        
        return view('articles.articles',
        ["title" => "articoli","articles" => $this->articles]);
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

        $article->user_id = auth()->user()->id;

        if($request->hasFile("image") && $request->file("image")->isValid()){
            $imgName = "img_" . uniqid() . "." . $request->file("image")->extension();
            $imgPath = "public/images/" . $article->id;
            

            $article->image = $request->file("image")->storeAs($imgPath,$imgName);
            
        }
        
        $article->save();
        return redirect()->back()->with("success","Articolo creato correttamente");
    }

    public function show(Article $article){
        return view("articles.show",["article"=> $article]);
    }


    public function edit(Article $article){
        
        if($article->user_id === auth()->user()->id || $this->isSuperUser()){
            return  view("articles.edit",["title"=> "Modifica Articolo","article"=> $article, "categories" => Category::all()]);
        }
        
        abort(403);
    }


    public function update(StoreArticleRequest $request, Article $article)
    {

        if($article->user_id === auth()->user()->id || $this->isSuperUser()){
            $article->update($request->all());
            return redirect()->route("articles.index")->with("success","Articolo modificato con successo");
        }
        abort(403);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        if($article->user_id === auth()->user()->id || $this->isSuperUser()){
            $article->delete();
            return redirect()->back()->with(["success" => "Articolo eliminato correttamente"]);
        }
        abort(403); 
        
    }

}
