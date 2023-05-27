<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagsController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/tags', [TagsController::class,'index'])->name('tags.index');
Route::get('/article/{slug}/', [ArticleController::class,'index'])->name('article.index');
Route::get('/article_detail/{slug}/', [ArticleController::class,'show'])->name('article.detail');
Route::get('/anggota/{slug}/', [AnggotaController::class,'index'])->name('anggota.index');
