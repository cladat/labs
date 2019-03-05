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
            'image' => '/img/team/1.jpg',
            'job' => 'Junior Developer',
        ]);
        Profil::create([
            'name' => 'Younes Erraide',
            'image' => '/img/team/2.jpg',
            'job' => 'Web Designer',
        ]);
        Profil::create([
            'name' => 'Younes Erraide',
            'image' => '/img/team/2.jpg',
            'job' => 'Senior Developer',
        ]);
    }
}
