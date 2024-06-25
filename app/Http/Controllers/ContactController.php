<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactsGet(){
        $title = "Blog Laravel Marco";

        return view('pages.contacts',
        ["title" => $title]);
        
    }

    public function contactsPost(Request $request){
        return redirect()->back()->with(["success" => "Inviato correttamente"]);
    }
}
