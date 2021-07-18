<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post_id)
    {
        $comments = Comment::where('post_id', $post_id)->orderBy('id', 'desc')->get();
        return view('templates.comments', compact('comments'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required'
        ],
        [
            'comment.required' => 'Please give your comment !!'
        ]);

        $comment =  Comment::create([
            'comment' => $request->comment,
            'post_id' => $id
        ]);

        return $comment;
    }
}
