<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function journalPage(){

        return view('profile');
    }

    public function journalGet(){

        dd(request()->all());
    }

    public function journalPost(){

        dd(request()->all());
    }
}
