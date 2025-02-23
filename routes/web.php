<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//*Rotte article
Route::get('/create/article', [ArticleController::class, 'create'])->name('article.create');

// rotta index articles
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
// roota show articles
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
// rotta category
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');

//*rotta revisor
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

//*rotta articolo accettato
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');

//*rotta articolo rifiutato
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
//*rotta request revisor
Route::post('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
//*rotta revisor
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

//*rotta search articolo
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

//*rotta lavora con con noi
Route::get('revisor/form', [RevisorController::class, 'revisorForm'])
    ->middleware('auth')
    ->name('revisor.form');

//*rotta cambio lingue
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');