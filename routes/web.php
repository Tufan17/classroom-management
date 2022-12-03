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


Route::get('/questionbank', [App\Http\Controllers\QuestionBankController::class, 'index'])->name('questionbank');
Route::get('/questionbank/add', [App\Http\Controllers\QuestionBankController::class, 'add'])->name('questionbankadd');
Route::get('/questionbank/delete/{id}', [App\Http\Controllers\QuestionBankController::class, 'delete'])->name('questionbankdelete');
Route::get('/questionbank/questions/{id}', [App\Http\Controllers\QuestionBankController::class, 'addquestion'])->name('questionbankquestions');
Route::get('/questionbank/store', [App\Http\Controllers\QuestionBankController::class, 'store'])->name('questionbankstore');
Route::get('/questionbank/addquestion/{id}', [App\Http\Controllers\QuestionBankController::class, 'addquestion'])->name('questionbankaddquestion');

Route::get('/questionbank/storequestion', [App\Http\Controllers\QuestionController::class, 'storequestion'])->name('storequestion');
Route::get('/question/{id}', [App\Http\Controllers\QuestionController::class, 'index'])->name('showquestion');
Route::get('/deletequestion/{id}', [App\Http\Controllers\QuestionController::class, 'deletequestion'])->name('deletequestion');


Route::get('/exam', [App\Http\Controllers\ExamController::class, 'index'])->name('exam');
Route::get('/exam/add', [App\Http\Controllers\ExamController::class, 'create'])->name('examadd');
Route::get('/exam/store', [App\Http\Controllers\ExamController::class, 'store'])->name('examstore');
Route::get('/exam/addquestion/{id}', [App\Http\Controllers\ExamController::class, 'addquestion'])->name('addquestion');
Route::get('/exam/delete/{id}', [App\Http\Controllers\ExamController::class, 'deleteexam'])->name('deleteexam');
















