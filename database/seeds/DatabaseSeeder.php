<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        App\User::create([
            'name' => 'Breiner Sanchez',
            'email' => 'breiner.sv@gmail.com',
            'password' => Hash::make('123456789')
        ]);

        factory(App\User::class, 7)->create();

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
