<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class, 'showHomePage']);
Route::post('/home', [HomeController::class, 'storeData']);


Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register');
Route::post('/register', [RegisterController::class, 'storeData']);

Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login');
Route::post('/login', [LoginController::class, 'storeData']);

Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
route::post('/post', [PostController::class,'storeData']);


Route::get('/users', [UserController::class,'showUsers']);

Route::post('/logout', 'LoginController@logout')->name('logout');



Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');



 