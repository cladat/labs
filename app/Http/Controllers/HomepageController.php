<?php

namespace App\Http\Controllers;

use App\Content;
use App\Carousel;
use App\Client;
use App\Project;
use App\Service;
use App\Icon;
use App\Profil;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {

        $carou = Carousel::all();
        $cont = Content::all()->first();
        $clients = Client::all();
        $projects = Project::all()->reverse()->take(3);
        $icon = Icon::all();
        $services = Service::paginate(9);
        $profils = Profil::all()->random(3);
        return view('welcome', compact('carou', 'cont', 'clients', 'projects', 'icon', 'services', 'profils'));
    }
}
