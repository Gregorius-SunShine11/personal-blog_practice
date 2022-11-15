<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function home(){
		return view('blog\home');
	}
 
	public function biodata(){
		return view('blog\biodata');
	}
 
	public function event(){
		return view('blog\event');
	}
}
