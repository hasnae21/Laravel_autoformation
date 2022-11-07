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

    $user = User::find(3);   //chercher le user avec le cin avec l'id 3 
    echo $user->cins->cin;   //et imprimer son cin
});
