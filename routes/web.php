<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\Tp1VilleController;
use App\Http\Controllers\Tp1EtudiantController;

route::get('/', [Tp1EtudiantController::class, 'index'])->name('etudiant.index');

route::get('etudiant', [Tp1EtudiantController::class, 'index'])->name('etudiant.index');

route::get('etudiant/{tp1Etudiant}', [Tp1EtudiantController::class, 'show'])->name('etudiant.show');

route::get('etudiant-create', [Tp1EtudiantController::class, 'create'])->name('etudiant.create');

route::post('etudiant-create', [Tp1EtudiantController::class, 'store']);

route::get('etudiant-edit/{tp1Etudiant}', [Tp1EtudiantController::class, 'edit'])->name('etudiant.edit');

route::put('etudiant-edit/{tp1Etudiant}', [Tp1EtudiantController::class, 'update']);

route::delete('etudiant-edit/{tp1Etudiant}', [Tp1EtudiantController::class, 'destroy']);