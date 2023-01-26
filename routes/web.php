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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Tp1VilleController;
use App\Http\Controllers\Tp1EtudiantController;

route::get('etudiant', [Tp1EtudiantController::class, 'index'])->name('site.index');

route::get('etudiant/{tp1Etudiant}', [Tp1EtudiantController::class, 'show'])->name('site.show');

route::get('etudiant-create', [Tp1EtudiantController::class, 'create'])->name('site.create');

route::post('etudiant-create', [Tp1EtudiantController::class, 'store']);
