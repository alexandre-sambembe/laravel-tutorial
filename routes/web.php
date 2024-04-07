<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('marcas', 'Core.gerir-marcas')
    ->middleware(['auth'])
    ->name('marcas');

Route::view('categorias', 'Core.gerir-categorias')
    ->middleware(['auth'])
    ->name('categorias');

Route::view('produtos', 'Core.gerir-produtos')
    ->middleware(['auth'])
    ->name('produtos');


Volt::route('marcasforme', 'form.marcas')
    ->name('marcasforme');

require __DIR__.'/auth.php';
