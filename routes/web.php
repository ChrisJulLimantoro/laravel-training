<?php

use App\Http\Controllers\personController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/person', [personController::class, 'index'])->name('person.index');
Route::post('/person', [personController::class, 'store'])->name('person.store');
Route::delete('/person/{person}', [personController::class, 'destroy'])->name('person.destroy');
Route::put('/person/{person}', [personController::class, 'edit'])->name('person.edit');
