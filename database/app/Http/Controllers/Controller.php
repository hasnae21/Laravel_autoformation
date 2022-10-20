<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {

//Database Get 
        $user = DB::table('contacts')->get();
 
        return view('index',compact('user'));
    }








// Database where  
    public function FindId($id)
    {
        $user = DB::table('contacts')->where("id",$id)->get();
        
        return view('userId',compact('user'));
    }







//Database select first row 
    public function FindName()
    {
        $user = DB::table('contacts')->first();
        return $user->Nom;
    }





//Database OrderBy
    public function orderBy()
    {   
        $user = DB::table('contacts')->orderBy("Nom")->get();
 
        return view('index',compact('user'));
    }




// Database select
    public function select()
    {
        $user = DB::table('contacts')
        ->select('Nom','id')
        ->get();
 
        return view('index',compact('user'));
    }
   



    

// Database inner join
    public function join(){
        $users = DB::table('telephone')
            ->join('contactperson', 'contactperson.id', '=', 'telephone.id_phone')
            ->select('*')
            ->get();
            return view('join',compact('users'));
    }



// //// STOP


// Database left join
    public function LeftJoin(){
        $users = DB::table('contactperson')
            ->leftJoin('telephone', 'contactperson.id', '=', 'telephone.id_phone')
            ->select('*')
            ->get();
            return view('join',compact('users'));
    }

// Database right join
    public function RightJoin(){
        $users = DB::table('contactperson')
            ->rightJoin('telephone', 'contactperson.id', '=', 'telephone.id_phone')
            ->select('*')
            ->get();
            return view('join',compact('users'));
    }
    //cross join
}