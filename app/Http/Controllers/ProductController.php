<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function getAnimeByGenre(int $id){
        $response =  Http::get("https://api.jikan.moe/v4/anime?genres=$id")->json()["data"];
        $data = Arr::map($response, function($anime){
            return ['title' => $anime["title"],
            'image' => $anime["images"]["jpg"]["image_url"],
            'score' => $anime['score'],
            'year' => $anime['year']];
        });
        return $data;
    }
    public function index()
    {   $anime = Product::orderBy("title")->paginate(10);
        // dd(Product::all());
        return view("anime.anime-index", [
            "title" => "Elenco Anime",
            "anime" => $anime
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(int $genre_id, string $genre_name)
    {
        $data = $this->getAnimeByGenre($genre_id);
        foreach($data as $anime){

            Product::create($anime);
        }
        return redirect()->back()->with(["success" => "Anime importati correttamente"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $item)
    {
        return view("anime.form", [
            "product" => $item,
            "title" => "Modifica Anime",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route("product.index")->with(["success" => "Anime modificato correttamente"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
