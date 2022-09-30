<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;
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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', [TimelineController::class, 'index'])->name('posts.index');
    
    Route::put('/posts/create', [TimelineController::class, 'createPost'])->name('posts.create');
    
    Route::get('/posts/{post}', [TimelineController::class, 'show'])->name('posts.show');
    
    Route::get('/posts/{post}/edit', [TimelineController::class, 'edit'])->name('posts.edit');
    
    Route::put('/posts/{post}/update', [TimelineController::class, 'update'])->name('posts.update');
    
    Route::delete('/posts/{post}/delete', [TimelineController::class, 'delete'])->name('posts.delete');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Auth::routes();


