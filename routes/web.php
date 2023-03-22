<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//PÁGINA PRINCIPAL SEM AUTENTICAÇÃO
Route::get('/', function () { return view('inicial/inicial'); })->name("pagina_inicial");

//PÁGINA PRINCIPAL SEM AUTENTICAÇÃO
Route::get('/cadastro', function () { return view('inicial/cadastro'); })->name("cadastro_clientes");

//PÁGINA PRINCIPAL COM AUTENTICAÇÃO
Route::get('/index', function () {
    return view('inicial/index');
})->middleware(['auth', 'verified'])->name('index');

//AÇÕES DE LOGIN DE AUTENTICAÇÃO
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
