<?php

use App\Post;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Bienvenue',
            'body' => 'Voici notre nouveau site',
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Site en construction',
            'body' => 'Bientôt disponible',
            'user_id' => 1,
        ]);
    }
}
