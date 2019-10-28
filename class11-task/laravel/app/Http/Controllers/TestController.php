<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function testingGet(){

        return view('about');
    }

    public function testingPost(){

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

    public function view(){
//        $firstName = "Md";
//        $lastName = "Asif";
//        $heroNames = array(
//            'hero alam',
//            'batman'
//        );
//        $withTag = "<h2>Name</h2>";
        return view('home');

    }
}
