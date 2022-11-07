<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Carte;

class UserController extends Controller
{
    //
    public function OneToOne(){

        $One = User::find(1)->carteOne->cin;
        // return $One;

        $oneBelong = Carte::find(1)->userOne->name;

        return view('index', compact("One","oneBelong"));

    }

    // public function OneToMany(){

    //     $Many = User::find(1)->userOne;

    //     return view('index', compact("Many"));

    // }
}
