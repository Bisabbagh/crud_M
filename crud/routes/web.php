<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moveController;
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
Route::get('/move', [moveController::class,'index'])->name('move.index');
Route::get('/move/create', [moveController::class,'create'])->name('move.create');
Route::post('/move', [moveController::class,'store'])->name('move.store');

