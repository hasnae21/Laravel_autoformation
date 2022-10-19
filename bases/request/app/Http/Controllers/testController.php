<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test= Test::all();
        return view('test')->with([
            "test" => $test
        ]);
    }
    public function display(){
        $firstName= " boutaina";
        $age=24 ;
        return view('display',compact('firstName','age'));
        
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class TestController extends Controller
// {
//     //exemple 1
//     function index(Request $request)
//     {
//         $name = $request->input("name");
//         return view('index', compact("name"));
//     }

//     //exemple 2
//     function findId(Request $request, $id)
//     {

//         if ($id > 1) {
//             $name = $request->input("name");
//             return "Hello $name";
//         }
//     }
// }
