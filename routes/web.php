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
Route::get('/contact', [ContactController::class, 'index_contact'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact_send');
Route::get('/buy_ticket', [Controller::class, 'index_buy_ticket'])->name('buy_ticket');

Route::get('/',[Controller::class, 'index_home'])->name('home');
Route::get('/about',[Controller::class, 'index_about'])->name('about');


Route::group(['prefix' => 'backendQ1W2'], function () {
    Voyager::routes();
});

