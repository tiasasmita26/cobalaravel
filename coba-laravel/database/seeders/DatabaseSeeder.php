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
        //     'name' => 'Tia Sasmita',
        //     'email' => 'tiasasmita@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Rini Sasmita',
        //     'email' => 'rinisasmita@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum adipisci magni est repellendus odit cupiditate incidunt',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum adipisci magni est repellendus odit cupiditate incidunt, distinctio magnam, sed voluptas! Pariatur odit nisi iusto ratione. Molestiae totam accusantium dolore magni rerum magnam veritatis quaerat. Molestias quia fuga eius minima mollitia? Ullam fugit voluptates eaque voluptatem aliquam molestias laudantium, magnam in esse praesentium illum itaque non delectus quibusdam dignissimos distinctio ea exercitationem perferendis sit? Eveniet nam quis aperiam hic deleniti soluta, rem obcaecati a minus pariatur exercitationem doloribus eius maxime provident ea! Amet, rem omnis. Animi, earum facere maiores quos doloribus explicabo ipsam at iusto fugit iste placeat nostrum repellat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum adipisci magni est repellendus odit cupiditate incidunt',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum adipisci magni est repellendus odit cupiditate incidunt, distinctio magnam, sed voluptas! Pariatur odit nisi iusto ratione. Molestiae totam accusantium dolore magni rerum magnam veritatis quaerat. Molestias quia fuga eius minima mollitia? Ullam fugit voluptates eaque voluptatem aliquam molestias laudantium, magnam in esse praesentium illum itaque non delectus quibusdam dignissimos distinctio ea exercitationem perferendis sit? Eveniet nam quis aperiam hic deleniti soluta, rem obcaecati a minus pariatur exercitationem doloribus eius maxime provident ea! Amet, rem omnis. Animi, earum facere maiores quos doloribus explicabo ipsam at iusto fugit iste placeat nostrum repellat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum adipisci magni est repellendus odit cupiditate incidunt',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum adipisci magni est repellendus odit cupiditate incidunt, distinctio magnam, sed voluptas! Pariatur odit nisi iusto ratione. Molestiae totam accusantium dolore magni rerum magnam veritatis quaerat. Molestias quia fuga eius minima mollitia? Ullam fugit voluptates eaque voluptatem aliquam molestias laudantium, magnam in esse praesentium illum itaque non delectus quibusdam dignissimos distinctio ea exercitationem perferendis sit? Eveniet nam quis aperiam hic deleniti soluta, rem obcaecati a minus pariatur exercitationem doloribus eius maxime provident ea! Amet, rem omnis. Animi, earum facere maiores quos doloribus explicabo ipsam at iusto fugit iste placeat nostrum repellat.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum adipisci magni est repellendus odit cupiditate incidunt',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum adipisci magni est repellendus odit cupiditate incidunt, distinctio magnam, sed voluptas! Pariatur odit nisi iusto ratione. Molestiae totam accusantium dolore magni rerum magnam veritatis quaerat. Molestias quia fuga eius minima mollitia? Ullam fugit voluptates eaque voluptatem aliquam molestias laudantium, magnam in esse praesentium illum itaque non delectus quibusdam dignissimos distinctio ea exercitationem perferendis sit? Eveniet nam quis aperiam hic deleniti soluta, rem obcaecati a minus pariatur exercitationem doloribus eius maxime provident ea! Amet, rem omnis. Animi, earum facere maiores quos doloribus explicabo ipsam at iusto fugit iste placeat nostrum repellat.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
