<?php

use Illuminate\Database\Seeder;

use App\Instagram;

class InstagramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instagram::create([
            'pic' => 'img/instagram/1',
        ]);
        Instagram::create([
            'pic' => 'img/instagram/2',
        ]);
        Instagram::create([
            'pic' => 'img/instagram/3',
        ]);
        Instagram::create([
            'pic' => 'img/instagram/4',
        ]);
        Instagram::create([
            'pic' => 'img/instagram/5',
        ]);
        Instagram::create([
            'pic' => 'img/instagram/6',
        ]);
    }
}
