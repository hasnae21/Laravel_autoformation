<?php

use Illuminate\Support\Facades\Route;
// use App\Model\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    //return view('welcome');

    $cin = Cin::find(1);   //
    echo $cin->user->name;   //

    $user = User::find(1);   //chercher le user avec le cin avec l'id 1
    echo $user->cin->cin;   //et imprimer son cin
    
});
