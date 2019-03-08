<?php

use Illuminate\Database\Seeder;

use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => 'Dua Lipa',
            'image' => 'img/avatar/01.jpg',
            'job' => 'CEO Company',
        ]);
        Client::create([
            'name' => 'Emma Watson',
            'image' => 'img/avatar/02.jpg',
            'job' => 'Head Manager Company',
        ]);
    }
}
