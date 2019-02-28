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
        $instagrams = factory(App\Instagram::class, 6)->create();
    }
}
