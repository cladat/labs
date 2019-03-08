<?php

namespace App\Http\Controllers;
use App\Service;
use App\Content;
use App\Project;
use App\Icon;
use App\Contact;
use Illuminate\Http\Request;

class ServicepageController extends Controller
{
    public function index()
    {
        $cont = Content::all()->first();
        $projects = Project::all()->reverse()->take(6);
        $left = $projects->take(3);
        $right = $projects->take(-3);
        $icon = Icon::all();
        $services = Service::paginate(9);
        $card = Project::all()->reverse()->take(3);
        $contact = Contact::all();
        return view('pages.services', compact('cont', 'projects', 'left', 'right', 'icon', 'services', 'contact', 'card'));
    }
}
