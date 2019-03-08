<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(ProfilsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(InstagramsTableSeeder::class);
        $this->call(QuotesTableSeeder::class);
        $this->call(IconsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(ArticleTagTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);

    }
}
