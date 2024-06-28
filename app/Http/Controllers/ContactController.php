<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactsGet(){
        $title = "Blog Laravel Marco";

        return view('pages.contacts',
        ["title" => $title]);
        
    }

    public function contactsPost(Request $request){

        if($request->email){
            Mail::to("example@example.com")->send(new \App\Mail\ContactsEmail($request->name, $request->email, $request->content, $request->priority));

            Contact::create([
                "name"=> $request->name,
                "email"=> $request->email,
                "content"=> $request->content,
                "priority" => $request->priority
            ]);

            return redirect()->back()->with(["success" => "Inviato correttamente"]);
        }else{
            return redirect()->back()->with(["error" => "Compilare il campo \"EMAIL\""]);

        }
    }
}
