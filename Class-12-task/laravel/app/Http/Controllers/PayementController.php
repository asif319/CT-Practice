<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class PayementController extends Controller
{
    public function payementPage(){

        return view('home');
    }


    public function payementPost(Request $request){

        $this->validate(request(),[
           'name' => 'required',
            'task' => 'required'
        ]);

        if ($request->hasFile('image'))
        {
            $img = uniqid().'.jpg';
            $request->image->move('photos', $img);

            Task::create([
                'name' => request('name'),
                'task' => request('task'),
                'image' => $img
            ]);

            return redirect('about');

        }else
        {
            Task::create([
               'name' => request('name'),
               'task' => request('task')
            ]);

            return redirect('about');
        }
    }

    public function show(){

        $allData = Task::latest()->get();

        return view('about', compact('allData'));
    }

    public function edit($id){

        $data = Task::find($id);
        return view('update', compact('data'));
    }

    public function update($id){
        $this->validate(request(),[
            'name' => 'required',
            'task' => 'required'
        ]);

        Task::find($id)->update([
            'name' => request('name'),
            'task' => request('task')
        ]);

        return redirect('about')->with('updateSuccess', 'Updated Successfully');
    }

    public function delete($id){

        Task::find($id)->delete();

        return redirect('about')->with('delete', 'Task Deleted');

    }

}
