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

Route::get('/phpinfo', function () {
    phpinfo();
});
// Route::get('/articles', 'ArticleController@index')->name('article.list');
// Route::get('/article/{id}', 'ArticleController@show')->name('article.show');

//一覧表示
Route::get('/articles', [ArticleController::class, 'index'])->name('index');
//新規記事の作成
Route::get('/article/new', [ArticleController::class, 'create'])->name('article.new');
//新規記事の送信
Route::post('/article', [ArticleController::class, 'store'])->name('article.store');

//詳細表示={id}など任意の値が入るルーティングは一番下に書く
 // '/article/new' の/newという値が{id}に入り、エラーになる可能性があるため。
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
//編集
Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
//記事削除
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('article.delete');


Route::get('/threads', [ThreadController::class, 'index'])->name('threads');

Route::get('/threads/create', [ThreadController::class, 'create'])->name('threads.create');
Route::post('/threads/create', [ThreadController::class, 'create']);