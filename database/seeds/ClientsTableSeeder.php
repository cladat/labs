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
            'name' => 'Client 1',
            'image' => 'img/avatar/01.jpg',
            'job' => 'CEO Company',
            'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        ]);
        Client::create([
            'name' => 'Client 2',
            'image' => 'img/avatar/02.jpg',
            'job' => 'Head Manager Company',
            'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        ]);
        Client::create([
            'name' => 'Client 3',
            'image' => 'img/avatar/03.jpg',
            'job' => 'Assistant Company',
            'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        ]);
    }
}
