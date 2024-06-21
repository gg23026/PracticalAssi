<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KomandaController;
use App\Http\Controllers\SpeletajsController;
use App\Http\Controllers\TurnirsController;
use App\Http\Controllers\MacsController;
use App\Http\Controllers\SpelesController;
use App\Http\Controllers\StatistikaController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'home']);

// Komandas routes
Route::get('/komandas', [KomandaController::class, 'index'])->name('komandas.index');

// Spēlētāji routes
Route::get('/speletaji', [SpeletajsController::class, 'index'])->name('speletaji.index');

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

