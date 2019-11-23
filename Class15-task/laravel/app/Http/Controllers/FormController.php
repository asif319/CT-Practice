<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{

    public function showPost($id){

        $post = Post::find($id);
        $comment = $post->comments;


        return view('about', compact(['post', 'comment']));
    }

    public function comment($id)
    {
        $this->validate(request(),[
            'comment' => 'required'
        ]);

        User::find(Auth::id())->comment()->create([
            'admin_id' => Auth::guard('admin')->id(),
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

        return redirect()->route('user.show.post', $postId);

    }

    public function edit($id){

        $data = Task::find($id);
        return view('update', compact('data'));
    }

    public function update($id, Request $request){

        $this->validate(request(),[
            'name' => 'required',
            'task' => 'required'
        ]);

        if ($request->hasFile('image'))
        {
            $img = uniqid().'.jpg';
            $request->image->move('photos', $img);

            Task::find($id)->update([
                'name' => request('name'),
                'task' => request('task'),
                'image' => $img
            ]);

            return redirect('about');

        }else
        {
            Task::find($id)->update([
                'name' => request('name'),
                'task' => request('task')
            ]);

            return redirect('about')->with('updateSuccess', 'Updated Successfully');
        }



       // return redirect('about')->with('updateSuccess', 'Updated Successfully');
    }

    public function delete($id){

        Task::find($id)->delete();

        return redirect('about')->with('delete', 'Task Deleted');

    }

}
