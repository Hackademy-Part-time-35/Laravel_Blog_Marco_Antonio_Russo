<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{

    function getGenres(){
        return Http::get(("https://api.jikan.moe/v4/genres/anime"))->json()["data"];
    }

    function getAnimeByGenre(int $id){
        return Http::get("https://api.jikan.moe/v4/anime?genres=$id")->json()["data"];
    }

    function getAnimeById($id){
        return Http::get("https://api.jikan.moe/v4/anime/$id")->json()["data"];
    }

    function index(){
        return view("anime.index", [
            "genres" => $this->getGenres(),
            "title" => "Generi Anime"
        ]);
    }

    function animeByGenre($genre_id, $genre_name){
        return view("anime.byGenre", [
            "title" => "lista anime",
            "anime" => $this->getAnimeByGenre($genre_id),
            "genre_id" => $genre_id,
            "genre_name" => $genre_name
        ]);
    }

    function animeById($genre_id,$genre_name, $anime_id){
        return view("anime.byId", [
            "anime" => $this->getAnimeById($anime_id),
            "genre_id" => $genre_id,
            "genre_name" => $genre_name
        ]);
    }
}
