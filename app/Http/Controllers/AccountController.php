<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account(){
        return view("account.index");
    }

    public function userList(){
        return view("account.user-list", [
            "users" => \App\Models\User::all(),
            "title" => "Lista Utenti"
        ]);
    }
}
