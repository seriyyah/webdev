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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/content', function () {
    return view('content');
})->name('content');

Route::get('/web_dev', function () {
    return view('web_dev');
})->name('web_dev');

Route::get('/web_optima', function () {
    return view('web_optima');
})->name('web_optima');



Route::get('/', 'BlogController@blogprev')->name('home');




Route::get('/contact','ContactController@show')->name('contact');
Route::post('/contact','ContactController@mail');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/post/{slug}', 'BlogController@show');
Route::get('{slug}', 'PagesController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('login');



