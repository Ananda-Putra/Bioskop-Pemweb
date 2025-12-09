<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('loginView');
});
Route::get('/registerView', [AuthController::class, 'registerView'])->name('registerView');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/loginView', [AuthController::class, 'loginView'])->name('loginView');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'profil'])->name('profile');
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/pesan/{id}', [UserController::class, 'pesan'])->name('pesan');
Route::put('/pesan/order/{id}', [UserController::class, 'order'])->name('pesan.order');
Route::get('/pesanFood/{id}', [UserController::class, 'pesanFood'])->name('pesan.foodView');
Route::put('/pesan/orderFood/{id}', [UserController::class, 'orderFood'])->name('pesan.food');
Route::get('/pesanDrink/{id}', [UserController::class, 'pesanDrink'])->name('pesan.drinkView');
Route::put('/pesan/orderDrink/{id}', [UserController::class, 'orderDrink'])->name('pesan.drink');

Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/history/pdf', [HistoryController::class, 'downloadPdf'])->name('history.pdf');

Route::middleware('auth')->group(function () {
    //
    Route::get('/food', [FoodController::class, 'index'])->name('food');
    Route::post('/food/store', [FoodController::class, 'store'])->name('food.store');
    Route::get('/food/show/{id}', [FoodController::class, 'show'])->name('food.show');
    Route::put('/food/update/{id}', [FoodController::class, 'update'])->name('food.update');
    Route::delete('/food/destroy/{id}', [FoodController::class, 'destroy'])->name('food.destroy');

    Route::get('/drink', [DrinkController::class, 'index'])->name('drink');
    Route::post('/drink/store', [DrinkController::class, 'store'])->name('drink.store');
    Route::get('/drink/show/{id}', [DrinkController::class, 'show'])->name('drink.show');
    Route::put('/drink/update/{id}', [DrinkController::class, 'update'])->name('drink.update');
    Route::delete('/drink/destroy/{id}', [DrinkController::class, 'destroy'])->name('drink.destroy');

    Route::get('/film', [FilmController::class, 'index'])->name('film');
    Route::post('/film/store', [FilmController::class, 'store'])->name('film.store');
    Route::get('/film/detail/{id}', [FilmController::class, 'show'])->name('film.detail');
    Route::put('/film/update/{id}', [FilmController::class, 'update'])->name('film.update');
    Route::delete('/film/destroy/{id}', [FilmController::class, 'destroy'])->name('film.destroy');
});
