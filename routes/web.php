<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
Route::get('/movie/{id}', [MovieController::class, 'movie'])->name('movie');

Route::get('/dangky', function () {
    return view('register');
})->name('dangky');
Route::get('/movieAdmin', function () {
    return view('movieAdmin');
})->name('movieAdmin');

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/movieAdmin', [AdminController::class, 'dashboard']);

Route::get('/movieAddCategory', function () {
    return view('movieAddCategory');
})->name('movieAddCategory');
Route::get('/movieCategory', function () {
    return view('movieCategory');
})->name('movieCategory');
Route::get('/movieTicket', function () {
    return view('movieTicket');
})->name('movieTicket');
Route::get('/movieAddTicket', function () {
    return view('movieAddTicket');
})->name('movieAddTicket');

//User
Route::get('/movieUser', function () {
    return view('movieUser');
})->name('movieUser');
Route::get('/add-User', [UserController::class, 'add_User']);
Route::get('/all-User', [CategoryProduct::class, 'all_User']);
Route::post('/save-User', [UserController::class, 'save_User']);
