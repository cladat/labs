<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Article;
use App\Http\Requests\StoreComment;
use Illuminate\Http\Request;

use Carbon\Carbon;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComment $request)
    {
        $newcom = new Comment;
        $newcom->name=$request->name;
        $newcom->email=$request->email;
        $newcom->message = $request->message;
        $newcom->subject = $request->subject;
        $newcom->day = Carbon::now()->format('d');
        $newcom->year = Carbon::now()->format('M Y');
        $newcom->article_id = $request->article_id;
        $newcom->save();
        return redirect()->back()->with('alert', 'Your comment will be posted after validation!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $comment)
    {
        $comment->validate = 1;
        $comment->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
