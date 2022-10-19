<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

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


////Routing documentation

//  route basic
Route::get('/index', function () {
    return('hello world');
});

//Route avec controller //the best one
Route::get('/hello',[UserController::class,'index']);

// Methode match two methodes
Route::match(['get','post'],'/page',function(){
  return('salamoalaikoum');
});

// Methode any //not recomended
Route::any(('/pages'),function(){
 return('helle there');
});

//Route request
Route::any(('/form'),function(){
    return view('input');
});

Route::get('/user',function(request $request){
   return  $request->input("name");
});

//Protection CSRF
Route::get('/profile',function(){
    return view('csrf');
});
 
Route::any('/csrf',function(request $request){
    return  $request->input("name");
});
 
//Route redirect
Route::redirect('/he', '/pages');  //redirected url from he to pages
