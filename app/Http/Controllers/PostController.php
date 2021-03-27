<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'property' => 'required',
            'memo' => 'required',
        ]);
        $post = new Post();
        $post->name = $request->name;
        $post->age = $request->age;
        $post->sex = $request->sex;
        $post->property = $request->property;
        $post->memo = $request->memo;
        $post->save();

        return view('posts.store');
    }

    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }
}
