<?php

use App\Http\Controllers\MovieController;
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
    return view('index');
});

Route::get('/', [MovieController::class, 'index'])->name('index');
Route::get('/movie/{id}', [MovieController::class, 'moviedetail'])->name('moviedetail');
Route::get('/ticket/{idSuat}',[MovieController::class, 'ticket'])->name('ticket');

Route::get('/dangky', function () {
    return view('register');
})->name('dangky');




