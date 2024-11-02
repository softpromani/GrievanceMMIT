<?php

use App\Http\Controllers\home\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about-upashsa', [HomeController::class, 'aboutUPASHSA'])->name('aboutUPASHSA');
Route::get('aims-objectives', [HomeController::class, 'aimsObjectives'])->name('aimsObjectives');
Route::get('constituents-of-upashsa', [HomeController::class, 'constituentsUPASHSA'])->name('constituentsUPASHSA');
Route::get('member-of-association', [HomeController::class, 'associationMember'])->name('associationMember');

Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');

//Auth Pages
Route::get('sign-up', [HomeController::class, 'signUp'])->name('signUp');
Route::get('sign-in', [HomeController::class, 'signIn'])->name('signIn');
