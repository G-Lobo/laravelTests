<?php

use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//rotas de teste do input
Route::get('/input', [InputController::class, 'index'])->name('input.index');
Route::get('/input/create', [InputController::class, 'create'])->name('input.create');
Route::post('/input', [InputController::class, 'store'])->name('input.store');

//rotas do jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
