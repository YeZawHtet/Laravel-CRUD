<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        //first way
        //$data = Post::all();
        //second way
        $data = Post::orderBy('created_at', 'desc')->get();
        return view('create', ['data' => $data]);
    }
    public function postCreate(Request $request)
    {
        $postData = $this->postCreateData($request);
        Post::create($postData);
        return back();
    }

    //delete
    public function postDelete($id)
    {
        //first way
        // Post::where('id', $id)->delete();

        //second way
        Post::find($id)->delete();
        return back();
    }
    public function postDetails($id){
        $data = Post::find($id);
        return view('detail', ['data' => $data]);
    }
    public function postEdit($id){
        $data = Post::find($id);
        return view('edit', ['data' => $data]);
    }

    public function postEditData($id, Request $request){
        $data = Post::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect('create');
    }

    private function postCreateData($request)
    {
        return [
            'title' => $request->title,
            'description' => $request->description,
        ];
    }
}
