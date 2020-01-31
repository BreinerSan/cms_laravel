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
        // $this->call(UsersTableSeeder::class);

        App\Page::create([
            'parent_id' => null,
            'title' => 'Quienes somos',
            'slug' => 'quienes-somos',
            'body' => 'Contenido de quienes somos'
        ]);

        App\Page::create([
            'parent_id' => 1,
            'title' => 'Misión',
            'slug' => 'mision',
            'body' => 'Contenido de misión'
        ]);

        App\Page::create([
            'parent_id' => 1,
            'title' => 'Visión',
            'slug' => 'vision',
            'body' => 'Contenido de quienes visión'
        ]);
    }
}
