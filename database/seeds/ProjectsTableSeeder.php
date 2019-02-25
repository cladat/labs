<?php

use Illuminate\Database\Seeder;

use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Project 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'image' => 'img/card-1.jpg',
            'icon_id' => 23,
        ]);
        Project::create([
            'title' => 'Project 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'image' => 'img/card-2.jpg',
            'icon_id' => 11,
        ]);
        Project::create([
            'title' => 'Project 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'image' => 'img/card-3.jpg',
            'icon_id' => 37,
        ]);
    }
}
