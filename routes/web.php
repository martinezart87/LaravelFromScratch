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


// Route::get('posts/{post}', function ($post) {
    
//     $posts = [
//         'my-first-post' => ' Hello, this is my first post!',
//         'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//     ];

//     if(!array_key_exists($post, $posts)){
//         abort(404, 'Sorry, that post was not found');
//     }

//     return view('post', [
//         'post' => $posts[$post] ?? 'Nothing else'
//     ]);

// });


Route::get('/posts/{post}', '\App\Http\Controllers\PostsController@show');
Route::get('/sendmail', '\App\Http\Controllers\SendMailController@show');
Route::post('/sendmail', '\App\Http\Controllers\SendMailController@store');
Route::get('/sendnotify', '\App\Http\Controllers\SendNotificationController@show')->middleware('auth');
Route::post('/sendnotify', '\App\Http\Controllers\SendNotificationController@store')->middleware('auth');
Route::get('/testevent', '\App\Http\Controllers\TestEventsController@show');
Route::post('/testevent', '\App\Http\Controllers\TestEventsController@store');

Route::get('/conversations', '\App\Http\Controllers\Conversations@index');
Route::get('/conversations/{conversation}', '\App\Http\Controllers\Conversations@show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
