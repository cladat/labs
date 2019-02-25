<?php

use Illuminate\Database\Seeder;
use App\Profil;

class ProfilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'nom' => 'Adam',
            'prenom' => 'Adam',
            'image' => '/public/img/team/1.jpg',
        ]);
        Profil::create([
            'nom' => 'Younes',
            'prenom' => 'Lol',
            'image' => '/public/img/team/2.jpg',
        ]);
        Profil::create([
           
            'nom' => 'Mimo',
            'prenom' => 'Momo',
            'image' => '/public/img/team/3.jpg',
        ]);
    }
}
