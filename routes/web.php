<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietarioController;

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
    return redirect(route('dashboard'));
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

Route::get('/proprietarios', [ProprietarioController::class, 'index'])->name('proprietarios.index');
Route::get('/proprietarios/create', [ProprietarioController::class, 'create'])->name('proprietarios.create');
Route::get('/proprietarios/{proprietario}/edit', [ProprietarioController::class, 'edit'])->name('proprietarios.edit');
Route::get('/proprietarios/{proprietario}', [ProprietarioController::class, 'show'])->name('proprietarios.show');
Route::post('/proprietarios', [ProprietarioController::class, 'store'])->name('proprietarios.store');
Route::put('/proprietarios/{proprietario}', [ProprietarioController::class, 'update'])->name('proprietarios.update');
Route::delete('/proprietarios/{proprietario}', [ProprietarioController::class, 'destroy'])->name('proprietarios.destroy');

Auth::routes();
