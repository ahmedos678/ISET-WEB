<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use Illuminate\View\View;


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

Route::get('/sidebar', function () {
    return view('templateSideBar');
});

Route::get('/navbar', function () {
    return view('templateNavbar');
});

Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::get('/abscence', function () {
    return view('abscence');
});

Route::get('signin',[SigninController::class, 'index'])->name('signin');
Route::get('signup',[SignupController::class, 'index'])->name('signup');


