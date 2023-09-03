<?php

use App\Http\Controllers\AboutController;
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

Route::get('/about', [AboutController::class, 'index']);
// show posts list
Route::get('/blog', [PostController::class, 'list']);

// show detail of a post
Route::get('/blog/{post:id}', [PostController::class, 'details']);

// add new comment to a post if authenticated
Route::post('/blog/{post:id}', [CommentController::class, 'create']);

// show commnet form 
// Route::get('/comments/edit/{post:id}/{comment:id}', [CommentController::class, 'edit_form']);

// update comment
Route::get('/comments/edit/{post:id}/{comment:id}', [CommentController::class, 'get_comment']);
Route::post('/comments/edit/{post:id}/{comment:id}', [CommentController::class, 'edit']);

// delete comment
Route::get('/comments/delete/{post:id}/{comment:id}', [CommentController::class, 'delete']);

// show register form
Route::get('/register', [RegisterController::class, 'register']);

// create new account
Route::post('/register', [RegisterController::class, 'store']);

//show login form
Route::get('/login', [LoginController::class, 'create']);

// login user
Route::post('/login', [LoginController::class, 'store']);

// logout user
Route::get('/logout', [LogoutController::class, 'destroy']);

// admin dashboard view
Route::get('/admin', function () {
    return view('admin_dashboard');
});

// add a blog post
Route::post('/admin/add', [PostController::class, 'add']);

// edit a blog post
Route::post('/admin/edit', [PostController::class, 'edit']);

// delete a blog post
Route::post('/admin/delete', [PostController::class, 'delete']);

