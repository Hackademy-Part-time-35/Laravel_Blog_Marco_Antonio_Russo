<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    private $title = "Blog Laravel Marco";
        

    public function __construct(){
        
    }

    public function home(){
        return view('welcome',
        ["title" => $this->title]);
    }

    public function aboutUs(){

        define("US","Alunni di Aulab");

        $marco = new \stdClass();
        $marco->name = "Marco Antonio Russo";
        $marco->aboutUsDescription = "Aspirante WEB Developer";
        $marco->img = "/img/edited.jpg";

        return view('pages.aboutUs',
        [
        "US" => US,
        "marco" => $marco,
        "title" => $this->title,
        ]);
    }

    public function countString(){
        return view("pages.string-count");
    }

    public function countStringSend(Request $request){
        $string = $request->content;
        $stringLeng = strlen($string);
        return redirect()->back()->with(["output" => "Il messaggio inviato è lungo $stringLeng caratter" . ($stringLeng == 1 ? "e" : "i")]);
    }

    function showAPI(){
        return view("showapi");
    }

    function prodotti(){
        return view("pages.prodotti", [
            "title" => "Catalogo Prodotti"
        ]);
    }

    function numero($id){
        return $id;
    }
}
