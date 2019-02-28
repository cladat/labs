<?php

namespace App\Http\Controllers;
use App\Service;
use App\Content;
use App\Project;
use App\Icon;
use Illuminate\Http\Request;

class ServicepageController extends Controller
{
    public function index()
    {
        $cont = Content::all()->first();
        $projects = Project::all()->reverse()->take(3);
        $left = Project::all()->take(3);
        $right = Project::all()->reverse()->take(3);
        $icon = Icon::all();
        $services = Service::paginate(9);
        return view('pages.services', compact('cont', 'projects', 'left', 'right', 'icon', 'services'));
    }
}
