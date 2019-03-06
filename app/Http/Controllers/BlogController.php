<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Article;
use App\Tag;
use App\Category;
use App\ArticleTag;
use App\Instagram;
use App\Quote;
use App\Comment;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $articles = Article::where('validate', 1)->orderBy('created_at', 'title')->paginate(3);
        $categories = Category::all();
        $insta = Instagram::all();
        $quote = Quote::all();
        $tags = Tag::all();
        return view('pages.blog', compact('articles', 'categories', 'insta', 'tags', 'quote'));
    }

    public function show(Tag $tag) {

        $articles = $tag->articles;
        $categories = Category::all();
        $insta = Instagram::all();
        $quote = Quote::all();
        $tags = Tag::all();
        return view('pages.blogtag', compact('articles', 'categories', 'insta', 'tags', 'tag', 'quote'));
    }

    public function showcat(Category $category) {
        $articles = $category->articles;
        $categories = Category::all();
        $insta = Instagram::all();
        $quote = Quote::all();
        $tags = Tag::all();
        return view('pages.blogcat', compact('articles', 'categories', 'insta', 'tags', 'quote'));
    }

    public function read(Article $article) {
        $categories = Category::all();
        $insta = Instagram::all();
        $quote = Quote::all();
        $tags = Tag::all();
        $id = $article->id;
        $comments = Comment::where('article_id', $id)->get();
        $cmpt = Comment::where('article_id', $id)->where('validate', 1)->get()->count();
        return view('pages.blogread', compact('article', 'categories', 'insta', 'quote', 'tags', 'comments', 'cmpt'));
    }

    public function search(Request $request) {
        $keyword = $request->input('inputsearcher');
        $articles = Article::where([
            ['validate', 1],
            ['title', 'LIKE', '%'.$keyword.'%'] 
        ])->paginate(3);
        $categories = Category::all();
        $insta = Instagram::all();
        $quote = Quote::all();
        $tags = Tag::all();
        return view('pages.blog', compact('articles', 'categories', 'insta', 'tags', 'quote'));
    }
}
