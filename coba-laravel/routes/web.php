<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Tia Sasmita",
        "email" => "tiasasmita74@gmail.com",
        "image" => "tia.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rini Sasmita",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo impedit delectus cumque iure fuga quibusdam dolor cum omnis modi itaque quo ea et maxime laboriosam aspernatur nobis ipsam blanditiis sequi odio, labore culpa veniam optio? Vero ratione quasi hic impedit! Enim itaque dolorum consequuntur atque modi, praesentium esse, fuga dignissimos, quisquam perspiciatis commodi rerum voluptas quae facilis adipisci ipsa labore? Optio tempora voluptatem animi reprehenderit cupiditate enim sed laudantium non temporibus obcaecati quidem, dolores soluta ex ab exercitationem nisi repudiandae!"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tia Sasmita",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, numquam repudiandae soluta enim quas iure molestiae magnam aspernatur id accusantium! Expedita eum molestiae fugiat porro, magni dolores blanditiis laboriosam itaque consequuntur distinctio tenetur commodi iste recusandae impedit sequi voluptas voluptates voluptatum nisi cupiditate dignissimos dolorem neque. Iure hic, exercitationem, sed dolore quia tenetur odio itaque ullam laborum unde accusantium, excepturi porro blanditiis! Nobis, laborum saepe perferendis voluptates architecto rem, amet laudantium quia quis non autem quae sed vel ipsum illum maxime neque tenetur omnis molestiae reprehenderit iste! Quo reiciendis tempore delectus laborum commodi, minus, mollitia accusamus quasi ipsum quae quis."
        ]
    ];
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rini Sasmita",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo impedit delectus cumque iure fuga quibusdam dolor cum omnis modi itaque quo ea et maxime laboriosam aspernatur nobis ipsam blanditiis sequi odio, labore culpa veniam optio? Vero ratione quasi hic impedit! Enim itaque dolorum consequuntur atque modi, praesentium esse, fuga dignissimos, quisquam perspiciatis commodi rerum voluptas quae facilis adipisci ipsa labore? Optio tempora voluptatem animi reprehenderit cupiditate enim sed laudantium non temporibus obcaecati quidem, dolores soluta ex ab exercitationem nisi repudiandae!"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tia Sasmita",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, numquam repudiandae soluta enim quas iure molestiae magnam aspernatur id accusantium! Expedita eum molestiae fugiat porro, magni dolores blanditiis laboriosam itaque consequuntur distinctio tenetur commodi iste recusandae impedit sequi voluptas voluptates voluptatum nisi cupiditate dignissimos dolorem neque. Iure hic, exercitationem, sed dolore quia tenetur odio itaque ullam laborum unde accusantium, excepturi porro blanditiis! Nobis, laborum saepe perferendis voluptates architecto rem, amet laudantium quia quis non autem quae sed vel ipsum illum maxime neque tenetur omnis molestiae reprehenderit iste! Quo reiciendis tempore delectus laborum commodi, minus, mollitia accusamus quasi ipsum quae quis."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
