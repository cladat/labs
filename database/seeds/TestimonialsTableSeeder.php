<?php

use Illuminate\Database\Seeder;

use App\Testimonial;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'text' => 'I worked with the LABZ team for my website and it was amazing, they were awesome ! I loved working with them ! I recommend !',
            'client_id' => 1,
        ]);
        Testimonial::create([
            'text' => 'Labs helped me with the creation and building of my web and visual identity, and I\'m more than happy with the work they did. I would def work with them again.',
            'client_id' => 2,
        ]);
    }
}
