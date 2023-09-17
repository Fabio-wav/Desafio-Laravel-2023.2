<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ConsultaController;
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

Route::get('/', function () {
    return redirect(route('home'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//proprietarios
Route::get('/proprietarios', [ProprietarioController::class, 'index'])->name('proprietarios.index');
Route::get('/proprietarios/create', [ProprietarioController::class, 'create'])->name('proprietarios.create');
Route::get('/proprietarios/{proprietario}/edit', [ProprietarioController::class, 'edit'])->name('proprietarios.edit');
Route::get('/proprietarios/{proprietario}', [ProprietarioController::class, 'show'])->name('proprietarios.show');
Route::post('/proprietarios', [ProprietarioController::class, 'store'])->name('proprietarios.store');
Route::put('/proprietarios/{proprietario}', [ProprietarioController::class, 'update'])->name('proprietarios.update');
Route::delete('/proprietarios/{proprietario}', [ProprietarioController::class, 'destroy'])->name('proprietarios.destroy');
//fim-proprietarios

//users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
//fim-users

//animais
Route::get('/animais', [AnimalController::class, 'index'])->name('animais.index');
Route::get('/animais/create', [AnimalController::class, 'create'])->name('animais.create');
Route::get('/animais/{animal}/edit', [AnimalController::class, 'edit'])->name('animais.edit');
Route::get('/animais/{animal}', [AnimalController::class, 'show'])->name('animais.show');
Route::post('/animais', [AnimalController::class, 'store'])->name('animais.store');
Route::put('/animais/{animal}', [AnimalController::class, 'update'])->name('animais.update');
Route::delete('/animais/{animal}', [AnimalController::class, 'destroy'])->name('animais.destroy');
//fim-animais

//consultas
Route::get('/consultas', [ConsultaController::class, 'index'])->name('consultas.index');
Route::get('/consultas/create', [ConsultaController::class, 'create'])->name('consultas.create');
Route::get('/consultas/{consulta}/edit', [ConsultaController::class, 'edit'])->name('consultas.edit');
Route::get('/consultas/{consulta}', [ConsultaController::class, 'show'])->name('consultas.show');
Route::post('/consultas', [ConsultaController::class, 'store'])->name('consultas.store');
Route::put('/consultas/{consulta}', [ConsultaController::class, 'update'])->name('consultas.update');
Route::delete('/consultas/{consulta}', [ConsultaController::class, 'destroy'])->name('consultas.destroy');
Auth::routes();
