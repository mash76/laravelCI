<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
    	return "dasdadas";
    }
    public function view1(){

    	$p['name']='john';
    	$p['age']='13';
    	return view('hello',$p);
    }
}
