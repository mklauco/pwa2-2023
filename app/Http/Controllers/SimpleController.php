<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    //
    
    public function view25(){
        $parameter = 25;
        // dd($parameter); // die and dump
        return view('secondView')->with('parameter', $parameter);
        // return view('secondView');
    }
    
}
