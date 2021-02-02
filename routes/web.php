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
Route::get('/privacy', [Controller::class, 'IndexPrivacy'])->name('privacy');
Route::get('/polities', [Controller::class, 'IndexPolities'])->name('polities');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('show');

Route::post('/posts/{post}/comments', [PostsController::class, 'sendComments'])->name('sendComments')->middleware('verified');
Route::get('/posts/{post}/comments/{comment}/edit', [PostsController::class, 'editComments'])->name('editComments')->middleware('verified');;
Route::post('/posts/{post}/comments/{comment}/edit', [PostsController::class, 'sendEditComment'])->name('sendEditComment')->middleware('verified');;


Route::get('/contact', [ContactController::class, 'indexContact'])->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contactSend');
Route::get('/buy_ticket', [Controller::class, 'indexBuyTicket'])->name('buyTicket');
Route::get('/',[Controller::class, 'indexHome'])->name('home');
Route::get('/about',[Controller::class, 'indexAbout'])->name('about');
Route::get('/test',[Controller::class, 'indexTest'])->name('test');

Route::group(['prefix' => 'backside'], function () {
    Voyager::routes();
});


Auth::routes(['verify' => true]);

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile')->middleware('verified');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'saveChanges'])->name('save')->middleware('verified');;
Route::get('/profile/season-ticket', [App\Http\Controllers\HomeController::class, 'seasonTicket'])->name('seasonTicket')->middleware('verified');;
Route::get('/profile/my-comments', [App\Http\Controllers\HomeController::class, 'myComments'])->name('myComments')->middleware('verified');;
Route::get('/profile/order-story', [App\Http\Controllers\HomeController::class, 'orderStory'])->name('orderStory')->middleware('verified');;
Route::post('/profile/save', [App\Http\Controllers\HomeController::class, 'saveAvatar'])->name('saveAvatar')->middleware('verified');;

// Like Or Dislike
Route::post('/posts/likedislike',[PostsController::class, 'saveLikeDislike'])->name('likeDisLike');

Route::post('/posts/writecomment', [PostsController::class,'makeComment'])->middleware('verified');
Route::post('/posts/getcomments', [PostsController::class,'getComments']);
Route::post('/posts/deletecomment', [PostsController::class, 'deleteComment'])->name('deleteComment')->middleware('verified');
