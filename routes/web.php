<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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
//Route::get('/', function () {
//    return view('home');
//})->name('home');


Route::redirect('/', '/posts', 302);
Route::get('/posts',[PostController::class, 'index'])->name('posts');
Route::get('/post/show/{id}',[PostController::class, 'show'])->name('show');

Route::post('post/show/{id}/comment',[CommentController::class, 'store'])->name('comment.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
