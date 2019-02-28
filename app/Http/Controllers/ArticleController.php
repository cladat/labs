<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use App\Profil;
use App\Tag;
use App\ArticleTag;
use Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('site.blog.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        $tags = Tag::all();
        return view('site.blog.articles-create', compact('cats', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newarticle = new Article;
        $newarticle->title=$request->title;
        $newarticle->text=$request->text;
        $newarticle->image=$request->image->store('', 'image');
        $newarticle->category_id=$request->category_id;
        $newarticle->profil_id= Auth::User()->id;
        $newarticle->save();
        $tag = Tag::find($request->tag_id);
        $newarticle->tags()->attach($tag);
        $articles = Article::all();
        $cats = Category::all();
        return view('site.blog.articles', compact('articles', 'cats'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $cats = Category::all();
        $tags = Tag::all();
        return view('site.blog.articles-edit', compact('article', 'cats', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->authorize('update', $article);
        $article->title=$request->title;
        $article->text=$request->text;
        $article->category_id=$request->category_id;
        $article->image=$request->image->store('', 'image');
        $article->save();
        $tag = Tag::all();
        $article->tags()->detach($tag);
        $tag = Tag::find($request->tag_id);
        $article->tags()->attach($tag);
        $articles = Article::all();
        return view('site.blog.articles', compact('articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $this->authorize('update', $article);
        $article->delete();
        $articles = Article::all();
        return view('site.blog.articles', compact('articles'));
    }
}
