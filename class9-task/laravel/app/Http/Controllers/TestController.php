<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function name(){
return view('name');
    }

    public function profile(){
        return view('profile');
    }

    public function occupation(){
        return view('occupation');
    }

    public function address(){
        return view('address');
    }

    public function number(){
        return view('number');
    }
}
