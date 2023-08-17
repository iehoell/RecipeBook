<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\FavoritesController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');

Route::middleware('guest')->group(function () {
    
    //RegisterController

    Route::get('register', [RegisterController::class, 'index'])->name('register');

    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    //LoginController

    Route::get('login', [LoginController::class, 'index'])->name('login');

    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});

//RecipesController

Route::get('recipes', [RecipesController::class, 'index'])->name('recipes');

Route::get('recipes/create', [RecipesController::class, 'create'])->name('recipes.create');

Route::post('recipes', [RecipesController::class, 'store'])->name('recipes.store');

Route::get('recipes/{recipe}', [RecipesController::class, 'show'])->name('recipes.show');

Route::get('recipes/{recipe}/edit', [RecipesController::class, 'edit'])->name('recipes.edit');

Route::put('recipes/{recipe}', [RecipesController::class, 'update'])->name('recipes.update');

Route::delete('recipes/{recipe}', [RecipesController::class, 'delete'])->name('recipes.delete');

//FavoritesController

Route::get('favorites', [FavoritesController::class, 'index'])->name('favorites');

Route::redirect('/home', '/');
