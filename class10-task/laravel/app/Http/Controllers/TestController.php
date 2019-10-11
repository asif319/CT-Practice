<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function name($name, $nick=""){
return "My name is: " . $name .' '. $nick;
    }

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function contact(){
        return view('contact');
    }

    public function classTask(){
        return view('class');
    }
}
