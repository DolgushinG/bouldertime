<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;

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
Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('show');
Route::get('/contact', [Controller::class, 'index_contact'])->name('contact');

Route::get('/',[Controller::class, 'index_home'])->name('home');
Route::get('/about',[Controller::class, 'index_about'])->name('about');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
