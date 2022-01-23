<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\CarsController;

Route::get('/', [CarsController::class, 'home'])->name('home');
Route::get('/markes/create', [ModelsController::class, 'index'])->name('model_index');
Route::get('/markes', [ModelsController::class, 'view'])->name('markes_index');
Route::post('/markes/submit', [ModelsController::class, 'submit'])->name('marke_submit');
Route::get('/markes/delete/{marke}', [ModelsController::class, 'delete'])->name('marke_delete');
Route::get('/markes/edit/{marke}', [ModelsController::class, 'edit'])->name('marke_edit');
Route::post('/marke/update/{marke}', [ModelsController::class, 'update'])->name('marke_update');


Route::get('/automobiliu_forma', [CarsController::class, 'index'])->name('car_form');
Route::post('/automobiliu_forma/submit', [CarsController::class, 'submit'])->name('car_submit');
Route::get('/automobiliai/delete/{car}', [CarsController::class, 'delete'])->name('car_delete');
Route::get('/automobiliai/edit/{car}', [CarsController::class, 'edit'])->name('car_edit');
Route::post('/automobiliai/update/{car}', [CarsController::class, 'update'])->name('car_update');
