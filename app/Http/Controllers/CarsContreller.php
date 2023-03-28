<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsContreller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

}
