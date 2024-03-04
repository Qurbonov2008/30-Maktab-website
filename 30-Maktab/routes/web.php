<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
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

Route::get('/', [UserController::class, 'index'])->name('/');
Route::post('create_list', [SignUpController::class, 'store'])->name('create_index');
Route::post('post_email', [EmailController::class, 'store'])->name('post_email');
Route::get('about.html', [UserController::class, 'show'])->name('about.html');
Route::get('testimonial', [AboutController::class, 'index'])->name('testimonial');
Route::get('course.html', [UserController::class, 'store'])->name('course.html');
Route::get('teacher.html', [UserController::class, 'teacher'])->name('teacher.html');
Route::get('contact.html', [UserController::class, 'conatact'])->name('contact.html');
Route::get('login', [SignUpController::class, 'show'])->name('login');
Route::post('register', [LoginController::class, 'store'])->name('register');
Route::post('sign', [SignUpController::class, 'sign'])->name('sign');
Route::post('contact_create', [ContactController::class, 'store'])->name('contact_create');
Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('about_img', [AboutController::class, 'img'])->name('about_img');
