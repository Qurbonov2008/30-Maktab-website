<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::post('create_list', [SignUpController::class, 'store'])->name('create_index');
Route::post('post_email', [EmailController::class, 'store'])->name('post_email');
Route::get('testimonial', [AboutController::class, 'index'])->name('testimonial');
Route::get('course', [PopularCoursesController::class, 'show'])->name('course');
Route::get('teacher' , [TeacherController::class , 'index'])->name('teacher');
Route::get('contact', [ContactController::class, 'conatact'])->name('contact');
Route::post('register', [LoginController::class, 'store'])->name('register');
Route::post('sign', [SignUpController::class, 'sign'])->name('sign');
Route::post('contact_create', [ContactController::class, 'store'])->name('contact_create');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('about_name', [AboutController::class, 'name'])->name('about_name');

// Admin Contact  Route
Route::get('Admin' , [AdminController::class , 'index'])->name('Admin');
Route::get('Admin_contact' , [ContactController::class , 'index'])->name('Admin_Contact');
// Contactga yangi mijoiz yaratish uchun
Route::get('get_contact' , [ContactController::class , 'get_contact'])->name('get_contact');
Route::post('new_contact' , [ContactController::class , 'new_contact'])->name('new_contact');
// delete function
Route::delete('delete/{id}' , [ContactController::class , 'delete'])->name('delete');
// update
Route::get('get_update/{id}' , [ContactController::class , 'get_update'])->name('get_update');
Route::put('contact.update' , [ContactController::class , 'contact_update'])->name('contact.update');
// Kirish qismi
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate' , [AuthController::class , 'authenticate'])->name('authenticate');
// Admin Email Route
Route::get('Admin_email' , [EmailController::class , 'get_email'])->name('Admin_email');
// Email yaratish route
Route::get('get_email'  , [EmailController::class , 'show'])->name('get_email');
// Yangi Email yaratish route
Route::post('new_email' , [EmailController::class , 'new_email'])->name('new_email');
// Yangilash uchun Route
Route::get('get_update_email/{id}' , [EmailController::class , 'get_update_email'])->name('get_update_email');
Route::put('email.update' , [EmailController::class , 'email_update'])->name('email.update');
Route::put('email_post_update' , [EmailController::class , 'email_post_update'])->name('email_post_update');
// Delete uchun Route
Route::delete('email_delete/{id}' , [EmailController::class , 'delete'])->name('email_delete');
// Admin Teacher uchun Route
Route::get('Admin_teachers' , [TeacherController::class , 'show'])->name('Admin_teachers');
// Teacher yaratish
Route::get('get_teacher' , [TeacherController::class , 'get_create'])->name('get_teacher');
Route::post('create' , [TeacherController::class , 'create'])->name('create');
// teacher update
Route::get('get_teacher_update' , [TeacherController::class , 'get_teacher'])->name('get_teacher_update');
// Kurslar uchun Route
Route::get('Admin_course' , [PopularCoursesController::class , 'index'])->name('Admin_course');
// Yangi kurs qo'shish uchun route
Route::get('get_course' , [PopularCoursesController::class , 'get_course'])->name('get_course');
Route::post('new_course' , [PopularCoursesController::class , 'new_course'])->name('new_course');