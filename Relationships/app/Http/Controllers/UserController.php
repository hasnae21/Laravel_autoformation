<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function OneToOne(){

        $one = User::find(1)->carte->cin;
        return $one;

    }
}
