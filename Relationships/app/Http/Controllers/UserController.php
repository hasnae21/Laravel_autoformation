<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Carte;

class UserController extends Controller
{
    //
    public function OneToOne(){

        $One = User::find(1)->carteOne;

        $oneBelong = Carte::find(2)->userOne;
        
        // return $One;
        return view('indexone', compact("One","oneBelong"));
    }
    

    public function OneToMany(){

        $Many = User::find(2)->carteMany;

        return view('indexmany', compact("Many"));
    }    
    
    
    // public function belongsToMany(){

    //     $Belong = Carte::find(1)->userMany;
    //     // return $Belong;

    //     return view('indexbelong', compact("Belong"));
    // }


}
