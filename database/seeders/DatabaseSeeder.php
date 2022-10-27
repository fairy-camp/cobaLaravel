<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Arifin',
        //     'email' => 'arifin@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        // User::create([
        //     'name' => 'Dody',
        //     'email' => 'dody@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        User::factory(3)->create(); 

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();  
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excert' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At alias, consequatur corporis quod ipsa, explicabo odit tempora velit necessitatibus voluptate aliquid veniam tenetur aspernatur, ipsum debitis error porro minima voluptatum illum! Molestiae rem qui error cumque esse veritatis officiis!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis autem consectetur dolores impedit aliquam quisquam soluta ab, temporibus architecto totam voluptate officia veniam sint recusandae accusamus excepturi tempore repellat nam nesciunt fugiat quia illum magnam. Saepe soluta atque eius veniam laboriosam velit obcaecati sequi, sapiente iusto nobis dolorum facilis voluptates corrupti vel tempora error! Debitis aliquam autem enim error quod repellat quaerat ut cumque repellendus quidem. Tempora optio nemo nulla praesentium tenetur qui exercitationem libero ratione architecto temporibus doloremque ipsa quod, nobis omnis repudiandae eveniet earum? Dolorem provident voluptatibus sed iusto suscipit perspiciatis itaque. Fugiat consequatur et eius sapiente laboriosam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excert' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At alias, consequatur corporis quod ipsa, explicabo odit tempora velit necessitatibus voluptate aliquid veniam tenetur aspernatur, ipsum debitis error porro minima voluptatum illum! Molestiae rem qui error cumque esse veritatis officiis!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis autem consectetur dolores impedit aliquam quisquam soluta ab, temporibus architecto totam voluptate officia veniam sint recusandae accusamus excepturi tempore repellat nam nesciunt fugiat quia illum magnam. Saepe soluta atque eius veniam laboriosam velit obcaecati sequi, sapiente iusto nobis dolorum facilis voluptates corrupti vel tempora error! Debitis aliquam autem enim error quod repellat quaerat ut cumque repellendus quidem. Tempora optio nemo nulla praesentium tenetur qui exercitationem libero ratione architecto temporibus doloremque ipsa quod, nobis omnis repudiandae eveniet earum? Dolorem provident voluptatibus sed iusto suscipit perspiciatis itaque. Fugiat consequatur et eius sapiente laboriosam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excert' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At alias, consequatur corporis quod ipsa, explicabo odit tempora velit necessitatibus voluptate aliquid veniam tenetur aspernatur, ipsum debitis error porro minima voluptatum illum! Molestiae rem qui error cumque esse veritatis officiis!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis autem consectetur dolores impedit aliquam quisquam soluta ab, temporibus architecto totam voluptate officia veniam sint recusandae accusamus excepturi tempore repellat nam nesciunt fugiat quia illum magnam. Saepe soluta atque eius veniam laboriosam velit obcaecati sequi, sapiente iusto nobis dolorum facilis voluptates corrupti vel tempora error! Debitis aliquam autem enim error quod repellat quaerat ut cumque repellendus quidem. Tempora optio nemo nulla praesentium tenetur qui exercitationem libero ratione architecto temporibus doloremque ipsa quod, nobis omnis repudiandae eveniet earum? Dolorem provident voluptatibus sed iusto suscipit perspiciatis itaque. Fugiat consequatur et eius sapiente laboriosam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excert' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At alias, consequatur corporis quod ipsa, explicabo odit tempora velit necessitatibus voluptate aliquid veniam tenetur aspernatur, ipsum debitis error porro minima voluptatum illum! Molestiae rem qui error cumque esse veritatis officiis!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis autem consectetur dolores impedit aliquam quisquam soluta ab, temporibus architecto totam voluptate officia veniam sint recusandae accusamus excepturi tempore repellat nam nesciunt fugiat quia illum magnam. Saepe soluta atque eius veniam laboriosam velit obcaecati sequi, sapiente iusto nobis dolorum facilis voluptates corrupti vel tempora error! Debitis aliquam autem enim error quod repellat quaerat ut cumque repellendus quidem. Tempora optio nemo nulla praesentium tenetur qui exercitationem libero ratione architecto temporibus doloremque ipsa quod, nobis omnis repudiandae eveniet earum? Dolorem provident voluptatibus sed iusto suscipit perspiciatis itaque. Fugiat consequatur et eius sapiente laboriosam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
