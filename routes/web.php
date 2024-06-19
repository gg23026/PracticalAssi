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

Route::get('/komandas', [HomeController::class, 'indexKomandas']);
Route::get('/speletaji', [HomeController::class, 'indexSpeletaji']);
Route::get('/turniri', [HomeController::class, 'indexTurniri']);
Route::get('/maci', [HomeController::class, 'indexMaci']);
Route::get('/speles', [HomeController::class, 'indexSpeles']);
Route::get('/statistika', [HomeController::class, 'indexStatistika']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

