<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@labs.be',
            'email_verified_at' => now(),
            'password' => bcrypt('adminlabs'), // secret
            'role_id' => 1,
            'profil_id' => 1,
            'status' => 1,
        ]);
        User::create([
            'email' => 'editor@labs.be',
            'email_verified_at' => now(),
            'password' => bcrypt('editorlabs'), // secret
            'role_id' => 2,
            'profil_id' => 2,
            'status' => 1,
        ]);
        User::create([
            'email' => 'mrlol@labs.be',
            'email_verified_at' => now(),
            'password' => bcrypt('lollabs'), // secret
            'role_id' => 3,
            'profil_id' => 3,
            'status' => 1,
        ]);
    }
}
