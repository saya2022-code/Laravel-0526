<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ArticleController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/articles', 'ArticleController@index')->name('article.list');
// Route::get('/article/{id}', 'ArticleController@show')->name('article.show');

Route::get('/articles', [ArticleController::class, 'index'])->name('index');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/threads', [ThreadController::class, 'index'])->name('threads');

Route::get('/threads/create', [ThreadController::class, 'create'])->name('threads.create');
Route::post('/threads/create', [ThreadController::class, 'create']);