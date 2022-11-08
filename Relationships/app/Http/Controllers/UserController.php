<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Carte;

class UserController extends Controller
{
    //
    public function OneToOne(){

        $One = User::find(2)->carteOne->cin;
        // return $One;

        $oneBelong = Carte::find(2)->userOne;

        return view('indexone', compact("oneBelong","One"));

    }

    public function OneToMany(){

        $Many = User::find(2)->userOne->cin;


}
