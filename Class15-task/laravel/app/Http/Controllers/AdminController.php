<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $postCount = count(Post::all());
        return view('admin.index', compact('postCount'));

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

    public function showPost()
    {
        return view('admin.post');
    }

    public function post()
    {
        $this->validate(request(),[
            'name' => 'required',
            'details' => 'required'
        ]);

        Admin::find(Auth::guard('admin')->id())->posts()->create([
           'name' => request('name'),
           'details' => request('details')
        ]);

        return "Post Hoise";

    }

    public function showAllPost()
    {
        $post = Post::latest()->get();

        return view('admin.show_post', compact('post'));

    }

    public function postIndi($id)
    {
        $post = Post::find($id);
        $comment = $post->comments;


        return view('admin.show_indi_post', compact(['post', 'comment']));
    }

    public function postComment($id)
    {
        $this->validate(request(),[
            'comment' => 'required'
        ]);

        Admin::find(Auth::guard('admin')->id())->comments()->create([
            'user_id' => Auth::id(),
            'post_id' => $id,
            'comment' => request('comment')
        ]);

        return redirect()->back();
    }

    public function updateComment($id, $postId)
    {
        Comment::find($id)->update([
            'comment' => request('comment')
        ]);

        return redirect()->route('admin.post.show', $postId);

    }

    public function role()
    {
        $role = Admin::all();

        return view('admin.role', compact('role'));
    }

    public function updateRole($id)
    {
        $admin = Admin::find($id);

        $data = ['name' => $admin->name,
            'email' => 'e@m.l',
            'password' => $admin->password];

        User::create($data);

        $admin->delete();

        return redirect()->back();

    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.show');
    }
}
