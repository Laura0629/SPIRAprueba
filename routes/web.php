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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/subjects', [App\Http\Controllers\SubjectsController::class, 'index'])->name('subjects.index');
Route::get('/subjects/create', [App\Http\Controllers\SubjectsController::class, 'create'])->name('subjects.create');
Route::post('/subjects/store', [App\Http\Controllers\SubjectsController::class, 'store'])->name('subjects.store');
Route::get('/subjects/edit/{id}', [App\Http\Controllers\SubjectsController::class, 'edit'])->name('subjects.edit');
Route::put('/subjects/update/{id}', [App\Http\Controllers\SubjectsController::class, 'update'])->name('subjects.update');
Route::delete('/subjects/delete/{id}', [App\Http\Controllers\SubjectsController::class, 'delete'])->name('subjects.delete');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');

Route::get('/users/enrroll/{id}', [App\Http\Controllers\UserController::class, 'enrrollSubjects'])->name('users.enrroll');
Route::post('/users/enrroll/{id}', [App\Http\Controllers\UserController::class, 'storeEnrrolle'])->name('users.storeEnrrolle');