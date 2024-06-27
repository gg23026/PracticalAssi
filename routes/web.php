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
use App\Http\Controllers\LanguageController;


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

Route::resource('komandas', KomandaController::class);
Route::resource('speletaji', SpeletajsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('comment/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('comment/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('comment/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::post('comment/{type}/{id}', [CommentController::class, 'store'])->name('comment.store');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'lv'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

#Route::post('/set-language', [LanguageController::class, 'setLanguage'])->name('set-language');
#Route::middleware(['auth'])->group(function () {
 #   Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
#});
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');


// Authentication routes
require __DIR__.'/auth.php';



#Auth::routes();

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
