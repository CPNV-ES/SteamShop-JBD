<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishController;
use Illuminate\Support\Facades\Route;

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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::singleton('basket', BasketController::class);
    Route::patch('/basket/buy', [BasketController::class, 'buyGame'])->name('basket.buyGame');
    Route::resource('games', GameController::class);
    Route::resource('library', LibraryController::class);
    Route::resource('wishes', WishController::class);
    Route::get('/', [GameController::class, 'listFamous']);
});



require __DIR__ . '/auth.php';
