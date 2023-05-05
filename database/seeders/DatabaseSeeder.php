<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Arif',
            'username' => 'arif',
            'email' => 'arifrm28@gmail.com',
            'password' => bcrypt('password'),
        ]);
        // User::create([
        //     'name' => 'Mubarok',
        //     'email' => 'mubarok@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        User::factory(5)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam quaerat odit ut ex',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam quaerat odit ut ex, reprehenderit veritatis facilis aut dolores iure itaque, ad quidem necessitatibus.</p><p>Vero repellat non iusto eius? Laudantium sed dolorum laborum. Repudiandae nam aspernatur quasi odio, unde nesciunt asperiores quia ad blanditiis cum cumque dolore! Alias molestias provident explicabo tenetur expedita necessitatibus repellat, suscipit eaque nulla nisi vero officiis, velit magnam possimus quas quod similique optio est corporis!</p><p>Cum magnam facilis rerum nostrum laboriosam exercitationem ducimus in et numquam accusamus, odio harum qui labore impedit adipisci commodi! Perferendis architecto minus quae deserunt praesentium rerum eveniet veritatis magni possimus aliquid enim dolores in tempore nostrum recusandae nam, nobis laboriosam autem! Quasi libero recusandae tempora laudantium dolor, repudiandae quos voluptatibus!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam quaerat odit ut ex',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam quaerat odit ut ex, reprehenderit veritatis facilis aut dolores iure itaque, ad quidem necessitatibus.</p><p>Vero repellat non iusto eius? Laudantium sed dolorum laborum. Repudiandae nam aspernatur quasi odio, unde nesciunt asperiores quia ad blanditiis cum cumque dolore! Alias molestias provident explicabo tenetur expedita necessitatibus repellat, suscipit eaque nulla nisi vero officiis, velit magnam possimus quas quod similique optio est corporis!</p><p>Cum magnam facilis rerum nostrum laboriosam exercitationem ducimus in et numquam accusamus, odio harum qui labore impedit adipisci commodi! Perferendis architecto minus quae deserunt praesentium rerum eveniet veritatis magni possimus aliquid enim dolores in tempore nostrum recusandae nam, nobis laboriosam autem! Quasi libero recusandae tempora laudantium dolor, repudiandae quos voluptatibus!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam quaerat odit ut ex',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam quaerat odit ut ex, reprehenderit veritatis facilis aut dolores iure itaque, ad quidem necessitatibus.</p><p>Vero repellat non iusto eius? Laudantium sed dolorum laborum. Repudiandae nam aspernatur quasi odio, unde nesciunt asperiores quia ad blanditiis cum cumque dolore! Alias molestias provident explicabo tenetur expedita necessitatibus repellat, suscipit eaque nulla nisi vero officiis, velit magnam possimus quas quod similique optio est corporis!</p><p>Cum magnam facilis rerum nostrum laboriosam exercitationem ducimus in et numquam accusamus, odio harum qui labore impedit adipisci commodi! Perferendis architecto minus quae deserunt praesentium rerum eveniet veritatis magni possimus aliquid enim dolores in tempore nostrum recusandae nam, nobis laboriosam autem! Quasi libero recusandae tempora laudantium dolor, repudiandae quos voluptatibus!</p>'
        // ]);
    }
}
