<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;

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

Route::get('/', [EtudiantController::class, 'index'])->name('home');
Route::get('/about', [EtudiantController::class, 'about'])->name('about');
Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::get('/contact', [EtudiantController::class, 'contact'])->name('contact');
Route::get('detailFormation/{id}', [FormationController::class, 'show'])->name('detailFormation');

Route::get('/dashboard', function () {
    return view('client.connecte.pages.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/detailFormation/{id}', [FormationController::class, 'detailformation'])->name('detailFormation');
    Route::get('/cours/{id}', [FormationController::class, 'cours'])->name('cours');
    Route::get('/chapitre/{id}/{idc}', [FormationController::class, 'chapitre'])->name('chapitre');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
