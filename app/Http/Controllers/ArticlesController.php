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

        return view("articles.form", [
            "categories" => Category::all(),
            "articles" => Article::all(),
            "title" => "Crea Articolo",
            "action" => route("articles.store"),
            "method" => "",
            "article" => new Article()

        ]);
    }



    public function store(StoreArticleRequest $request){

        //? Mail::to("example@example.com")->send(new newArticleCreated(
        //?     $request->title, 
        //?     auth()->user()->email
        //? ));



        $article = Article::create(array_merge(
            $request->all(),
            ["user_id" => auth()->user()->id]
        ));

        $article->categories()->attach($request->categories);

        if($request->hasFile("image") && $request->file("image")->isValid()){
            $imgName = "img_" . uniqid() . "." . $request->file("image")->extension();
            $imgPath = "public/images/" . $article->id;
            

            $article->image = $request->file("image")->storeAs($imgPath,$imgName);
            
            $article->save();
        }
        
        return redirect()->back()->with("success","Articolo creato correttamente");
    }





    public function show(Article $article){
        return view("articles.show",["article"=> $article]);
    }


    public function edit(Article $article){
        
        if(!($article->user_id === auth()->user()->id || $this->isSuperUser())){
            abort(403);
        }
        
        return  view("articles.form",[
            "title"=> "Modifica Articolo",
            "article"=> $article,
            "categories" => Category::all(),
            "action" => route("articles.update", $article),
            "method" => "PUT",
        ]);
    }


    public function update(StoreArticleRequest $request, Article $article)
    {

        if(!($article->user_id === auth()->user()->id || $this->isSuperUser())){
            abort(403);    
        }


        $article->update($request->all());
        $article->categories()->detach();
        $article->categories()->attach($request->categories);
        return redirect()->route("articles.index")->with("success","Articolo modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        if(!($article->user_id !== auth()->user()->id || $this->isSuperUser())){
            abort(403); 
        }
        
        $article->categories()->detach();
        $article->delete();
        return redirect()->back()->with(["success" => "Articolo eliminato correttamente"]);
    }


    public function destroyFromMultiselect(Request $request){

        $filteredArticles = Article::whereIn("id", $request->input("ids"))->get();
        $numbOfFilteredArticles = $filteredArticles->count();
        
        foreach($filteredArticles as $filteredArticle){
            $numbOfFilteredArticle = $filteredArticle->categories->count();
            if($filteredArticle->categories->count()){
                $filteredArticle->categories()->detach();

            }
            $filteredArticle->delete();
        }
        
        return redirect()->back()->with(["success" => "$numbOfFilteredArticles articol". ($numbOfFilteredArticles > 1 ? "i" : "o") . " cancellat" . ($numbOfFilteredArticles > 1 ? "i" : "o") . " correttamente"]);
    }

    public function getArticlesAPI(){
        return Article::all();
    }

    public function articleList(){
        return view("account.article-list", [
            "title" => "Lista Articoli"
        ]);
    }
}
