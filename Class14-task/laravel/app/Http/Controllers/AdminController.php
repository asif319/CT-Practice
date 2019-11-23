<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');

    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login()
    {
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['name' => request('name'), 'password' => request('password')]))
        {
            return redirect()->route('admin.dashboard');

        }

        else{
            return redirect()->route('admin.login.show')->with('logFail', 'Username and Password do not match');
        }
    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.show');
    }
}
