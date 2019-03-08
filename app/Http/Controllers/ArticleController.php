<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use App\Profil;
use App\Tag;
use App\ArticleTag;
use App\Http\Requests\StoreArticle;
use App\Http\Requests\UpdateArticle;
use Auth;
use Illuminate\Http\Request;
use App\Events\MailarticleEvent;

use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('validate', 1)->get();
        $now = Carbon::now();
        return view('site.blog.articles', compact('articles','now'));
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
    public function store(StoreArticle $request)
    {
        $newarticle = new Article;
        $newarticle->title=$request->title;
        $newarticle->text=$request->text;
        $newarticle->comms = $request->comms;
        $newarticle->image=$request->image->store('', 'image');
        $newarticle->day = Carbon::now()->format('d');
        $newarticle->year = Carbon::now()->format('M Y');
        $newarticle->category_id=$request->category_id;
        $newarticle->profil_id= Auth::User()->id;
        $newarticle->user_id= Auth::User()->id;
        $newarticle->save();
        $tag = Tag::find($request->tag_id);
        $newarticle->tags()->attach($tag);
        $articles = Article::where('validate', 1)->get();
        $cats = Category::all();
        event(new MailarticleEvent($request));
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
       return view('site.blog.articles-show', compact('article'));
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
    public function update(UpdateArticle $request, Article $article)
    {
        $this->authorize('update', $article);
        $article->title=$request->title;
        $article->text=$request->text;
        $article->comms = $request->comms;
        $article->category_id=$request->category_id;
        if($request->image) {
            $article->image=$request->image->store('', 'image');
        }
        $article->save();
        $tag = Tag::all();
        $article->tags()->detach($tag);
        $tag = Tag::find($request->tag_id);
        $article->tags()->attach($tag);
        $articles = Article::where('validate', 1)->get();
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
        ArticleTag::where('article_id', 'LIKE', '%'.$article->id.'%')->delete();
        $article->delete();
        return redirect()->back();
    }
}
