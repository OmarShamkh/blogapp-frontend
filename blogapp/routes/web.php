<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\LogoutController;


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


Route::get('/blog', [PostController::class, 'list']);
Route::get('/blog/{post:id}', [PostController::class, 'details']);

Route::post('/comments/add/{post:id}', [CommentController::class, 'create']);
Route::get('/comments/edit/{comment:id}', [CommentController::class, 'edit_form']);
Route::post('/comments/edit/{comment:id}', [CommentController::class, 'edit']);
Route::get('/comments/delete/{comment:id}', [CommentController::class, 'delete']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'destroy']);
