<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    private $articles = [];
    private $lorem;

    public function __construct(){

        $this->lorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem   minus, sint officia quis odit quisquam asperiores, ut aut.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iste asperiores quam, accusantium est obcaecati quasi sequi aliquam quibusdam possimus itaque libero rem nostrum soluta. Et vitae autem voluptate numquam?
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam dicta sunt quaerat commodi aperiam aliquid sed? Suscipit culpa deserunt velit sed placeat nulla facilis. Veritatis minus temporibus animi? Earum?";

        $this->articles = [
            ["title" => "titolo 1", "category" => "action", "description" => $this->lorem, "visible" => true],
            ["title" => "titolo 2", "category" => "fantasy", "description" => $this->lorem, "visible" => true],
            ["title" => "titolo 3", "category" => "animation", "description" => $this->lorem, "visible" => false],
            ["title" => "titolo 4", "category" => "thriller", "description" => $this->lorem, "visible" => true],
        ];

    }

    public function home(){
        $title = "Blog Laravel Marco";
        return view('welcome',
        ["title" => $title]);
    }

    public function articles(){
        $title = "Blog Laravel Marco";
        $articles = array_filter($this->articles, function($el){
            return $el["visible"] == true;
        });
    
        return view('pages.articles',
        ["title" => $title,"articles" => $articles]);
    }

    public function article($id){
        $article = $this->articles[$id];
        return view("pages.article",["article"=> $article]);
    }


    public function aboutUs(){
        $title = "Blog Laravel Marco";

        define("US","Alunni di Aulab");

        $marco = new \stdClass();
        $marco->name = "Marco Antonio Russo";
        $marco->aboutUsDescription = "Aspirante WEB Developer";
        $marco->img = "/img/edited.jpg";

        return view('pages.aboutUs',
        [
        "US" => US,
        "marco" => $marco,
        "title" => $title,
        ]);
    }

    public function countString(){
        return view("pages.string-count");
    }

    public function countStringSend(Request $request){
        $string = $request->content;
        $stringLeng = strlen($string);
        return redirect()->back()->with(["output" => "Il messaggio inviato è lungo $stringLeng caratteri"]);
    }


}
