<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('user.login');
    }

    public function login()
    {
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['name' => \request('name'), 'password' => \request('password')]))
        {
            return redirect(url('/'));
        }else
        {
            return redirect()->route('user.login.show');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('user.login.show');
    }
}
