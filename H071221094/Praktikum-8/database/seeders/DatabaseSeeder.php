<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(3)->create();
        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Syifa Ur Rahmi',
            'username' => 'Syifa',
            'email' => 'sifasisi3@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Zakiah Fitri',
        //     'email' => 'zakiahf@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Dzul Fadli',
        //     'email' => 'fadlidzul@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis perferendis explicabo corporis temporibus rerum fuga id consequuntur dolores aliquid? Asperiores dolore dolores, numquam ipsam suscipit temporibus accusantium aut, illo dignissimos architecto iste, cum laudantium animi eaque sint! Quis ipsam expedita illum? Modi quasi quia soluta iusto alias assumenda at, odio atque possimus. Vitae cupiditate sed iure sint deserunt aliquid, labore sunt, dolores dolore nisi natus voluptate maxime deleniti a facilis porro? Ratione recusandae excepturi laborum cumque laboriosam sint nostrum qui nisi fugiat facere, exercitationem eaque illum minus repudiandae nemo officia a magni pariatur eos minima rerum nesciunt repellat laudantium ab.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis perferendis explicabo corporis temporibus rerum fuga id consequuntur dolores aliquid? Asperiores dolore dolores, numquam ipsam suscipit temporibus accusantium aut, illo dignissimos architecto iste, cum laudantium animi eaque sint! Quis ipsam expedita illum? Modi quasi quia soluta iusto alias assumenda at, odio atque possimus. Vitae cupiditate sed iure sint deserunt aliquid, labore sunt, dolores dolore nisi natus voluptate maxime deleniti a facilis porro? Ratione recusandae excepturi laborum cumque laboriosam sint nostrum qui nisi fugiat facere, exercitationem eaque illum minus repudiandae nemo officia a magni pariatur eos minima rerum nesciunt repellat laudantium ab.',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis perferendis explicabo corporis temporibus rerum fuga id consequuntur dolores aliquid? Asperiores dolore dolores, numquam ipsam suscipit temporibus accusantium aut, illo dignissimos architecto iste, cum laudantium animi eaque sint! Quis ipsam expedita illum? Modi quasi quia soluta iusto alias assumenda at, odio atque possimus. Vitae cupiditate sed iure sint deserunt aliquid, labore sunt, dolores dolore nisi natus voluptate maxime deleniti a facilis porro? Ratione recusandae excepturi laborum cumque laboriosam sint nostrum qui nisi fugiat facere, exercitationem eaque illum minus repudiandae nemo officia a magni pariatur eos minima rerum nesciunt repellat laudantium ab.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
