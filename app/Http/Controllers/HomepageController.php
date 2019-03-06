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
        // Profil de gauche aléatoire sauf le profil admin 
        $profils = Profil::inRandomOrder()->having('id', '>', 1)->take(1)->get();
        // Profil de droite aléatoire sauf le profil admin 
        $profilss = Profil::inRandomOrder()->having('id', '>', 1)->take(1)->get();
        // Profil admin au milieu
        $admin = Profil::where('id', 1)->get();
        if ($profils == $profilss) {
            return $this->index();
        }
        return view('welcome', compact('carou', 'cont', 'clients', 'projects', 'icon', 'services', 'profils', 'admin', 'profilss'));
    }
}
