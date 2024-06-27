<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KomandaController;
use App\Http\Controllers\SpeletajsController;
use App\Http\Controllers\TurnirsController;
use App\Http\Controllers\MacsController;
use App\Http\Controllers\SpelesController;
use App\Http\Controllers\StatistikaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\NewsController;

Route::get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');

Route::get('/latest-news', [NewsController::class, 'latestNews'])->name('latest-news');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'lv'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/comments/{type}/{id}', [CommentController::class, 'store'])->name('comment.store');


Auth::routes();

// Komandas routes
Route::get('/komandas', [KomandaController::class, 'index'])->name('komandas.index');
Route::get('/komandas/{id}', [KomandaController::class, 'show'])->name('komandas.show');

// Spēlētāji routes
Route::get('/speletaji', [SpeletajsController::class, 'index'])->name('speletaji.index');
Route::get('/speletaji/{id}', [SpeletajsController::class, 'show'])->name('speletaji.show');

// Turnīri routes
Route::get('/turniri', [TurnirsController::class, 'index'])->name('turniri.index');

// Mači routes
Route::get('/maci', [MacsController::class, 'index'])->name('maci.index');

// Spēles routes
Route::get('/speles', [SpelesController::class, 'index'])->name('speles.index');

// Statistika routes
Route::get('/statistika', [StatistikaController::class, 'index'])->name('statistika.index');

Route::resource('komandas', KomandaController::class);
Route::resource('speletaji', SpeletajsController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('comment/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('comment/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('comment/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::post('comment/{type}/{id}', [CommentController::class, 'store'])->name('comment.store');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'lv'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back();
});



Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

require __DIR__.'/auth.php';

