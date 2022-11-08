<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Carte;

class UserController extends Controller
{
    //
    public function OneToOne(){

        $One = User::find(2)->carteOne;
        // return $One;
        // $oneBelong = Carte::find(2)->userOne;

        return view('indexone', compact("One"));
    }
    
    public function OneToMany(){

        $Many = User::find(1)->userOne;

        return view('indexmany', compact("Many"));
    }    
    

    // public function belongsTo(){

    //     $data = Carte::find(2);
    //     return $data->carte .$data  ;
    // }
    
    // public function belongsToMany(){
    
    //     $user = Carte::find(1);
    //     return $user->User;
    // }


}
