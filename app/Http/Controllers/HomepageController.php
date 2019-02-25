<?php

namespace App\Http\Controllers;

use App\Content;
use App\Carousel;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {

        $carou = Carousel::all();
        $cont = Content::all()->first();
        return view('welcome', compact('carou', 'cont'));
    }
}
