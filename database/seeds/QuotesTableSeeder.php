<?php

use Illuminate\Database\Seeder;

use App\Quote;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quotes = factory(App\Quote::class, 1)->create();
    }
}
