<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $item = User::find($id);

        if( $request->hasFile("img") && $request->file("img")->isValid()){
            $imgPath = "public/images/" . auth()->user()->id . "_" .auth()->user()->name;
            $imgName = "profile_img_" . uniqid() . "." . $request->file("img")->extension();
            $item->img = $request->file("img")->storeAs($imgPath, $imgName);
            $item->save();
        }
        
        return redirect('/account')->with('success', 'Item updated successfully');
    }


    public function index(){
        return view("pages.users", [
            "title" => "Elenco Utenti"
        ]);
    }
}
