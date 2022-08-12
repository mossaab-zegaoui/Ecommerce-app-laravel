<?php

namespace Database\Seeders;

use App\Models\Post;
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
        $posts = [
            [
                'user_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos debitis suscipit molestiae at, dolorem repellat quia sunt!',
                'image' => 'img/post1.jpg'
            ], [
                'user_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos debitis suscipit molestiae at, dolorem repellat quia sunt!',
                'image' => 'img/post2.jpg'
            ],
            [
                'user_id' => 2,
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos debitis suscipit molestiae at, dolorem repellat quia sunt!',
                'image' => 'img/post2.jpg'
            ],
            [
                'user_id' => 2,
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos debitis suscipit molestiae at, dolorem repellat quia sunt!',
                'image' => 'img/post2.jpg'
            ],
        ];
        Post::insert($posts);
    }
}
