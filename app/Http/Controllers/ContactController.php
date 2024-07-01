<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactsGet(){
        $title = "Blog Laravel Marco";

        return view('pages.contacts',
        ["title" => $title]);
        
    }

    public function contactsPost(ContactsRequest $request){
        
        $request["name"] = $request->name ?? "customer";
        
        Mail::to("example@example.com")->send(new \App\Mail\ContactsEmail(
            $request->name, 
            $request->email, 
            $request->content, 
            $request->priority
        ));

        Contact::create($request->all());

        return redirect()->back()->with(["success" => "Inviato correttamente"]);
    }
}
