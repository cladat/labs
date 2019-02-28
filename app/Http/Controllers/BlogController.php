<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Article;
use App\Tag;
use App\Category;
use App\ArticleTag;
use App\Instagram;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $articles = Article::orderBy('created_at', 'title')->paginate(3);
        $categories = Category::all();
        $insta = Instagram::all();
        $tags = Tag::all();
        return view('pages.blog', compact('articles', 'categories', 'insta', 'tags'));
    }

    public function show(Tag $tag) {

        $articles = $tag->articles;
        dd($articles);
        $categories = Category::all();
        $insta = Instagram::all();
        $tags = Tag::all();
        return view('pages.lancelot', compact('articles', 'categories', 'insta', 'tags', 'tag'));
    }
}
