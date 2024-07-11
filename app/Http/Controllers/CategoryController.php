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
        return view("categories.form", [
            "title"=> "Crea Categoria",
            "category" => new Category,
            "action" => route("categories.store")
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
        return  view("categories.form", [
            "category" => $category,
            "title" => "Modifica Categoria",
            "action" => route("categories.update", $category)

        ]);
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
        $numbOfArticleAssociated = $category->articles->count();
        if($numbOfArticleAssociated){
            return redirect()->back()->with(["error" => "Impossibile cancellare la categoria poichè associata a $numbOfArticleAssociated articol".($numbOfArticleAssociated > 1? "i" : "o")]);
        }
        $category->delete();
        
        return redirect()->back()->with(["success" => "Categoria cancellata correttamente"]);
    }
    
    public function destroyFromMultiselect(Request $request){

        $filteredCategories = Category::whereIn("id", $request->input("ids"))->get();
        $numbOfFilteredCategories = $filteredCategories->count();

        foreach($filteredCategories as $filteredCategory){
            $numbOfFilteredCategory = $filteredCategory->articles->count();
            if($filteredCategory->articles->count()){
                return redirect()->back()->with(["error" => "Impossibile cancellare la categoria $filteredCategory->name poichè associata a $numbOfFilteredCategory articol".($numbOfFilteredCategory > 1? "i" : "o")]);
            }
            $filteredCategory->delete();
        }
        
        return redirect()->back()->with(["success" => "$numbOfFilteredCategories categori". ($numbOfFilteredCategories > 1 ? "e" : "a") . " cancellat" . ($numbOfFilteredCategories > 1 ? "e" : "a") . " correttamente"]);
    }
    
}
