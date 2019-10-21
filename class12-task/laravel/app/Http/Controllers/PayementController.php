<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayementController extends Controller
{
    public function payementPage(){

        return view('home');
    }

    public function payementGet(){

        dd(request()->all());
    }

    public function payementPost(){

        dd(request()->all());
    }
}
