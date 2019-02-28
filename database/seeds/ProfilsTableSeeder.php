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
            'name' => 'Clara Datso',
            'image' => '/public/img/team/1.jpg',
        ]);
        Profil::create([
            'name' => 'Younes Erraide',
            'image' => '/public/img/team/2.jpg',
        ]);
        Profil::create([
           
            'name' => 'Mimo Bellavia',
            'image' => '/public/img/team/3.jpg',
        ]);
    }
}
