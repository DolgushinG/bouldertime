<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
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

Route::post('/posts/{post}/comments', [PostsController::class, 'send_comments'])->name('send_comments')->middleware('verified');
Route::get('/posts/{post}/comments/{comment}/edit', [PostsController::class, 'edit_comments'])->name('edit_comments')->middleware('verified');;
Route::post('/posts/{post}/comments/{comment}/edit', [PostsController::class, 'send_edit_comment'])->name('send_edit_comment')->middleware('verified');;


Route::get('/contact', [ContactController::class, 'index_contact'])->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact_send');
Route::get('/buy_ticket', [Controller::class, 'index_buy_ticket'])->name('buy_ticket');
Route::get('/',[Controller::class, 'index_home'])->name('home');
Route::get('/about',[Controller::class, 'index_about'])->name('about');
Route::get('/test',[Controller::class, 'index_test'])->name('test');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes(['verify' => true]);

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile')->middleware('verified');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'save_changes'])->name('save')->middleware('verified');;
Route::get('/profile/season-ticket', [App\Http\Controllers\HomeController::class, 'season_ticket'])->name('season_ticket')->middleware('verified');;
Route::get('/profile/my-comments', [App\Http\Controllers\HomeController::class, 'my_comments'])->name('my_comments')->middleware('verified');;
Route::get('/profile/order-story', [App\Http\Controllers\HomeController::class, 'order_story'])->name('order_story')->middleware('verified');;
Route::post('/profile/save', [App\Http\Controllers\HomeController::class, 'save_avatar'])->name('save_avatar')->middleware('verified');;

// Like Or Dislike
Route::post('/posts/likedislike',[PostsController::class, 'save_likedislike'])->name('likedislike');

Route::post('/posts/writecomment', [PostsController::class,'makeComment'])->middleware('verified');
Route::post('/posts/getcomments', [PostsController::class,'getComments']);
Route::post('/posts/deletecomment', [PostsController::class, 'delete_comment'])->name('delete_comment')->middleware('verified');;
Route::post('/posts/writerepl', [PostsController::class, 'makeRepl'])->name('makeRepl')->middleware('verified');
Route::post('/posts/getreplies', [PostsController::class, 'getreplies'])->name('makerepl');
