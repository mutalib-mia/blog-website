<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthorController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add.blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.blog');
    Route::get('/manage-blog',[BlogController::class,'saveBlog'])->name('manage.blog');
//    Route::get('/edit-blog',[AdminController::class,'editBlog'])->name('edit.blog');
//    Route::get('/update-blog',[AdminController::class,'updateBlog'])->name('update.blog');
//    Route::get('/delete-blog',[AdminController::class,'deleteBlog'])->name('delete.blog');


    Route::get('/add-author',[AuthorController::class,'addAuthor'])->name('add.author');
    Route::get('/manage-author',[AuthorController::class,'manageAuthor'])->name('manage.author');
    Route::post('/save-author',[AuthorController::class,'saveAuthor'])->name('save.author');
    Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor'])->name('edit.author');
    Route::post('/update-author',[AuthorController::class,'updateAuthor'])->name('update.author');
    Route::post('/delete-author',[AuthorController::class,'deleteAuthor'])->name('delete.author');
    Route::get('/status/{id}',[AuthorController::class,'status'])->name('status');

});
