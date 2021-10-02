<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function session(Request $request){

        //request instance

        //storing data 
        //   $request->session()->put('name','Ans');
          //global
          session(['name'=>'Basit']);
// retrieve globaly
          $name=session('name');

          $data=['name'=>$name];

          //retreiving data 
        //   $name =    $request->session()->get('name');
        //   $city =    $request->session()->get('city','Slw');
        //     $all= $request->session()->all();
        
        //   dd($name);
        return view('session',$data);

    }
}
