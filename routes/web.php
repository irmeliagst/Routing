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
    return view('welcome');
});
Route::get('/about', function(){
    return view('about',[
        "judul" => "About",
        "nama" => "IRA AMELIA",
        "Nim" => "E41210501",
        "image" => "yoona.jpg"
    ]);
});
Route::get('/dashboard', function(){
    return view('dashboard',[
        "judul" => "Dashboard"
    ]);
});
Route::get('/blog', function(){
    $blog_post=[
        [
            "judul" => "Blog Pertama",
            "Penulis" => "IRA AMELIA",
            "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            A reprehenderit dolore eaque beatae pariatur exercitationem quisquam in magni quia ipsam, sit dolores. 
            Consectetur veniam dolore officiis obcaecati quidem distinctio perspiciatis eveniet, 
            porro molestiae magnam, atque asperiores harum minima? Rem quam porro nam soluta ullam, 
            eligendi dolor ipsum. Vero quos ipsam, mollitia illo, sint dolores neque, accusantium adipisci ex 
            nobis quisquam laudantium corporis qui repudiandae. 
            Quis, inventore dignissimos. Recusandae enim magnam architecto id temporibus commodi sed nihil velit.
            Mollitia deserunt veritatis reprehenderit sunt quod laborum quam. 
            Quia veniam expedita doloribus, quisquam animi inventore, quis rerum dolorem quibusdam quidem cum fugiat fuga."
        ],
        [
            "judul" => "Blog Kedua",
            "Penulis" => "AMALIA",
            "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            A reprehenderit dolore eaque beatae pariatur exercitationem quisquam in magni quia ipsam, sit dolores. 
            Consectetur veniam dolore officiis obcaecati quidem distinctio perspiciatis eveniet, 
            porro molestiae magnam, atque asperiores harum minima? Rem quam porro nam soluta ullam, 
            eligendi dolor ipsum. Vero quos ipsam, mollitia illo, sint dolores neque, accusantium adipisci ex 
            nobis quisquam laudantium corporis qui repudiandae. 
            Quis, inventore dignissimos. Recusandae enim magnam architecto id temporibus commodi sed nihil velit.
            Mollitia deserunt veritatis reprehenderit sunt quod laborum quam. 
            Quia veniam expedita doloribus, quisquam animi inventore, quis rerum dolorem quibusdam quidem cum fugiat fuga."
        ]
        ];
    return view('blog',[
        "judul" => "Blog",
        "postingan"=> $blog_post
    ]);
});