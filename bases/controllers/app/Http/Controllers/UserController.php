<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    //test 1
    public function afficher()
    {
        return 'hello world';
    }

    //test 2
    public function index()
    {
        $name = " myname";
        $age = 21;
        return view('index', compact('name', 'age'));
    }
}