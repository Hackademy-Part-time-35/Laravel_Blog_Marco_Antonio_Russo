<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $categories;

    public function __construct(Category $categories){
    $this->categories = Category::all();
    }
    public function index()
    {
        return view("categories.index", [
            "title" => "Categorie",
            "categories" => $this->categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.create", [
            "title"=> "Crea"
        ]);
    }

 

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->back()->with("success","Categoria creata correttamente");
    }

    public function storeFromArticles(Request $request)
    {
        Category::create($request->all());
        return redirect()->back()->with("success","Categoria creata correttamente")->withInput();
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return  view("categories.edit", ["category" => $category, "title" => "Modifica"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route("categories.index")->with("success","Categoria modificata con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $numArticles = Article::where('category_id', $category->id)->count();
        Article::where('category_id', $category->id)->update(["category_id" => 7]);
        $category->delete();
        
        return redirect()->back()->with(["success" => "Categoria cancellata correttamente - $numArticles articoli sono stati modificati"]);
    }

    public function destroyFromMultiselect(Request $request){

        dd($request->all());

        return redirect()->back()->with(["success" => "Categorie cancellate correttamente"]);
    }

}
