<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {
        // Eloquent ORM -> Get all the data
        $data = Post::all();

        // Pass the data to the view
        return view('post.index', ['posts' => $data, 'pageTitle' => 'Blog']);
    }

    function show($id){
        $post = Post::findOrFail($id); // could be done manually, but this is fine

        return view('post.show', ['post' => $post, 'pageTitle' => $post->title]);

    }

    function create(){
        $post = Post::create([
            'title' => 'My find unique post',
            'body' => 'This is to test find',
            'author' => 'Anas',
            'published' => true
        ]);

        return redirect('/blog');
    }

    function delete(){
        Post::destroy(5);
    }
}
