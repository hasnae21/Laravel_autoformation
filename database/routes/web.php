<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Database Get Data 
Route::any("/index",[Controller::class,"index"]);






//route DB where
Route::any("person/{id}",[Controller::class,"FindId"]);







//route DB select first row 
Route::any("/findName",[Controller::class,"FindName"]);



//route DB orderBy
Route::any("/orderBy",[Controller::class,"orderBy"]);

//route select from DB
Route::any("/select",[Controller::class,"select"]);

// route inner Joint
Route::any("/innerJoin",[Controller::class,"join"]);

//route left join
Route::any("/LeftJoin",[Controller::class,"LeftJoin"]);

//route right join
Route::any("/RightJoin",[Controller::class,"RightJoin"]);