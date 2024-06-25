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

Route::get('/', [HomeController::class, 'home']);

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('komandas', KomandaController::class);
    Route::resource('speletaji', SpeletajsController::class);
    Route::post('comment/{type}/{id}', [CommentController::class, 'store'])->name('comment.store');
});

// Authentication routes
require __DIR__.'/auth.php';



#Auth::routes();

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
