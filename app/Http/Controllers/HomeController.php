<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MailEvent;

use App\Comment;
use App\Article;
use App\Profil;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $com = Comment::where('validate', 0)->count();
        $art = Article::where('validate', 0)->count();
        $user = Auth::user();
        return view('home', compact('com', 'art', 'user'));
    }

}
