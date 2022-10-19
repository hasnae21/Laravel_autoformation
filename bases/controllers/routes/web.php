<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\invokeController;

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

//exmple 1
Route::get('/user',[UserController::class,'afficher']);

//exmple 2
Route::get('/page',[UserController::class,'index']);

//Contrôller à simple action
Route::get('/invokable',invokeController::class);