<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ExamensController;
use App\Http\Controllers\FavoriController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserFormateurController;
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

Route::get('/', [EtudiantController::class, 'index'])->name('home');
Route::get('/about', [EtudiantController::class, 'about'])->name('about');
// Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::get('/formations', [FormationController::class, 'all'])->name('formations');
Route::get('/contact', [EtudiantController::class, 'contact'])->name('contact');
Route::get('detailFormation/{id}', [FormationController::class, 'show'])->name('detailFormation');
Route::get('studenConnect', [EtudiantController::class, 'connexon'])->name('studenConnect');
Route::get('studenRegister', [EtudiantController::class, 'register'])->name('studenRegister');

// Route::get('/dashboard', [FormationController::class, 'dashbord'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/allform', [FormationController::class, 'all'])->name('allform');
Route::get('formBy/{id}', [FormationController::class, 'formBy'])->name('formBy');
Route::get('horizontale', [FormationController::class, 'horizontale'])->name('horizontale');
Route::get('/formationDetail/{id}', [FormationController::class, 'detailformation'])->name('formationDetail');
Route::get('formateur/{id}', [FavoriController::class, 'formateur'])->name('formateur');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [FormationController::class, 'dashbord'])->name('dashboard');
    Route::get('/cours/{id}', [FormationController::class, 'cours'])->name('cours');
    Route::get('/resultat/{id}', [ExamensController::class, 'resultat'])->name('resultat');
    Route::get('/addFavori/{id}', [FavoriController::class, 'index'])->name('addFavori');
    Route::get('/chapitre/{id}/{idc}', [FormationController::class, 'chapitre'])->name('chapitre');
    Route::get('finiChapitre/{id}', [FormationController::class, 'finiChapitre'])->name('finiChapitre');
    Route::get('passerExamen/{id}', [FormationController::class, 'passerExamen'])->name('passerExamen');
    Route::get('examen/{id}', [ExamensController::class, 'index'])->name('examen');
    Route::get('formByCategories/{id}', [FormationController::class, 'formByCategories'])->name('formByCategories');

    Route::get('profil', [FormationController::class, 'profil'])->name('profil');
    Route::get('compte', [FormationController::class, 'compte'])->name('compte');
    Route::get('photo', [FormationController::class, 'photo'])->name('photo');

    Route::get('addFavori/{id}', [FavoriController::class, 'addFavori'])->name('addFavori');
    Route::get('deleteFavorie/{id}', [FavoriController::class, 'deleteFavorie'])->name('deleteFavorie');
    Route::get('beginForm/{id}', [FormationController::class, 'beginForm'])->name('beginForm');
    Route::get('favories', [FavoriController::class, 'favories'])->name('favories');
    Route::get('mesFormations', [FormationController::class, 'mesFormations'])->name('mesFormations');

    Route::post('/SendExam', [ExamensController::class, 'store'])->name('SendExam');

    Route::post('/editProfil', [FormationController::class, 'editProfil'])->name('editProfil');
    Route::post('/editCompte', [FormationController::class, 'editCompte'])->name('editCompte');
    Route::post('/photo', [FormationController::class, 'editphoto'])->name('photo');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/adminHome', [UserFormateurController::class, 'home'])->name('adminHome');
    Route::get('/gestionprof', [UserFormateurController::class, 'index'])->name('gestionprof');
    Route::get('/ateliers', [UserFormateurController::class, 'ateliers'])->name('ateliers');
    Route::get('/gestionstudent', [UserFormateurController::class, 'student'])->name('gestionstudent');
    Route::get('/gestionrole', [UserFormateurController::class, 'role'])->name('gestionrole');
    Route::get('/addUser', [UserFormateurController::class, 'create'])->name('addUser');

    Route::get('/detailProf/{id}', [UserFormateurController::class, 'show'])->name('detailProf');
});

require __DIR__ . '/auth.php';
