<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index() {
        // Eloquent ORM -> Get all the data
        $data = Comment::all();

        // Pass the data to the view
        return view('comment.index', ['comments' => $data, 'pageTitle' => 'Blog']);
    }

    function create(){
        Comment::create([
            'author' => 'Anas',
            'content' => 'This is another test comment',
            'post_id' => 5
        ]);

        return redirect('/comments');
    }
}
