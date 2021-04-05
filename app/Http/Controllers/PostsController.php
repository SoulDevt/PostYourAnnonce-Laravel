<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index(){
        $posts = Posts::all();
        return view('welcome', ['posts' => $posts]);
    }
    public function create_post() {
        return view('create_post');
    }
    public function show($id) {
        $posts = Posts::findOrFail($id);
        return view('/show', ['posts' => $posts]);
    }
    public function store(Request $data){
        $post = new Posts();
        $post->title= request('title');
        $post->description = request('description');
        $post->author = request('author');
        $post->save();
        return redirect('/');
    }
}
