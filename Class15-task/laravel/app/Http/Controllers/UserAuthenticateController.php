<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthenticateController extends Controller
{
    public function index()
    {
        $post = Post::latest()->get();
        return view('home', compact('post'));
    }


    public function showLogin()
    {
        return view('user.login');

    }

    public function showRegister()
    {
        return view('user.register');

    }

    public function register()
    {
        $this->validate(request(),[
            'name' => 'required|alpha_dash|unique:users,name',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        return redirect()->route('user.login.show')->with('regSuc', 'Register Success Hoise');

    }

    public function login()
    {
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['name' => request('name'), 'password' => request('password')]))
        {
            return redirect()->route('data.show');
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
