<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;

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
Route::post('/posts/{post}/comments', [PostsController::class, 'send_comments'])->name('send_comments');
Route::get('/posts/{post}/comments/{comment}/edit', [PostsController::class, 'edit_comments'])->name('edit_comments');
Route::post('/posts/{post}/comments/{comment}/edit', [PostsController::class, 'send_edit_comment'])->name('send_edit_comment');
Route::post('/posts/{post}', [PostsController::class, 'like_post'])->name('like_post');

Route::get('/contact', [ContactController::class, 'index_contact'])->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact_send');
Route::get('/buy_ticket', [Controller::class, 'index_buy_ticket'])->name('buy_ticket');
Route::get('/',[Controller::class, 'index_home'])->name('home');
Route::get('/about',[Controller::class, 'index_about'])->name('about');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/profile/season-ticket', [App\Http\Controllers\HomeController::class, 'season_ticket'])->name('season_ticket');
Route::get('/profile/my-comments', [App\Http\Controllers\HomeController::class, 'my_comments'])->name('my_comments');
