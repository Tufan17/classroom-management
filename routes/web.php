<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lesson', [App\Http\Controllers\CourseController::class, 'index'])->name('lesson');
Route::get('/lesson/delete/{id}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('subjectdelete');
Route::get('/lesson/add', [App\Http\Controllers\CourseController::class, 'addlesson'])->name('lessonadd');



Route::get('/subject/add', [App\Http\Controllers\SubjectController::class, 'store'])->name('subjectadd');
Route::get('/subject/delete/{id}', [App\Http\Controllers\SubjectController::class, 'destroy'])->name('subjectdelete');
Route::get('/subject/{id}', [App\Http\Controllers\SubjectController::class, 'index'])->name('subject');






