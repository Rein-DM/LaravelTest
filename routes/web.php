<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('books', BookController::class)->names([
    'index' => 'books.list',
    'create' => 'books.new',
    'store' => 'books.save',
    // 'show' => 'books.view',
    // 'edit' => 'books.modify',
    // 'update' => 'books.update',
    // 'destroy' => 'books.delete',
]);
Route::resource('authors', AuthorController::class)->names([
    'index' => 'authors.list',
    'create' => 'authors.new',
    'store' => 'authors.save',
    // 'show' => 'authors.view',
    // 'edit' => 'authors.modify',
    // 'update' => 'authors.update',
    'destroy' => 'authors.delete',
]);
Route::post('/books/{book}/authors', [BookController::class, 'attachAuthors'])->name('books.attachAuthors');
Route::get('/posts', [PostsController::class, 'index'])->name('posting.index');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posting.show');
Route::get('/posting/create', [PostsController::class, 'create'])->name('posting.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posting.store');
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
