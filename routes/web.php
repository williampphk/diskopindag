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
    return view ('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "nama" => "william",
        "email" => "william.pphk@gmail.com",
        "img" => "stewie.jpg"

    ]);
});

Route::get('/blog', function () {
    
$blog_post = [
    [
        "title" => "Judul post kedua",
        "author"=> "udin si",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ex quo magni animi. Esse, vero. Blanditiis, impedit tenetur quas, vel vitae tempore ducimus a exercitationem labore ipsum hic sint dolor earum aperiam dicta ex provident. Veritatis tempora libero labore dolor nihil pariatur recusandae odit corrupti! Facilis eos sequi, enim, nulla libero, similique in vitae quo praesentium inventore perferendis quasi assumenda? Animi earum tenetur velit molestias tempore nulla possimus, ipsum mollitia. Quisquam necessitatibus consectetur laboriosam sit nihil unde error vitae earum!"
    ],

    [
        "title" => "Judul post pertama",
        "author"=> "William Pakpahan",
        "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ex quo magni animi. Esse, vero. Blanditiis, impedit tenetur quas, vel vitae tempore ducimus a exercitationem labore ipsum hic sint dolor earum aperiam dicta ex provident. Veritatis tempora libero labore dolor nihil pariatur recusandae odit corrupti! Facilis eos sequi, enim, nulla libero, similique in vitae quo praesentium inventore perferendis quasi assumenda? Animi earum tenetur velit molestias tempore nulla possimus, ipsum mollitia. Quisquam necessitatibus consectetur laboriosam sit nihil unde error vitae earum!"
    ]
];


    return view ('posts',[
        "title" => "blog",
        "blog" => $blog_post
    ]);
});


