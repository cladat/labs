<?php

use Illuminate\Database\Seeder;

use App\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create([
            'carousel_text' => 'Get your freebie template now!',
            'carousel_logo' => 'img/big-logo.png',
            'projects_title' => 'GET IN THE LAB AND DISCOVER THE WORLD',
            'projects_text1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',
            'projects_text2' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.',
            'video' => 'https://www.youtube.com/watch?v=JgHfx2v9zOU',
            'clients_title' => 'WHAT OUR CLIENTS SAY',
            'services_title' => 'GET IN THE LAB AND SEE THE SERVICES',
            'team_title' => 'GET IN THE LAB AND MEET THE TEAM',
            'page_services_title1' => 'Services',
            'page_services_title2' => 'Services',
            'contact_title' => 'CONTACT US',
            'contact_description' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'contact_company' => 'Main Office',
            'contact_address' => 'C/ Libertad, 34 05200 Arévalo',
            'contact_phone' => '0034 37483 2445 322',
            'contact_email' => 'hello@company.com',
        ]);
    }
}
