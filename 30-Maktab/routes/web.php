<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PopularCoursesController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TeacherController;
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
Route::get('testimonial', [AboutController::class, 'index'])->name('testimonial');
Route::get('course', [PopularCoursesController::class, 'show'])->name('course');
Route::get('teacher', [TeacherController::class, 'show'])->name('teacher');
Route::get('contact', [UserController::class, 'conatact'])->name('contact');
Route::get('login', [SignUpController::class, 'show'])->name('login');
Route::post('register', [LoginController::class, 'store'])->name('register');
Route::post('sign', [SignUpController::class, 'sign'])->name('sign');
Route::post('contact_create', [ContactController::class, 'store'])->name('contact_create');
Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('about_name', [AboutController::class, 'name'])->name('about_name');
