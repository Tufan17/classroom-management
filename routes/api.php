<?php

use Illuminate\Http\Request;

use App\Http\Controllers\Auth\AuthController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/lessons', [CourseController::class, 'lessons']);
Route::get('/lessons/{id}', [CourseController::class, 'subjects']);
Route::get('/subject/{id}', [CourseController::class, 'question']);
Route::get('/exam', [ExamController::class, 'alLExam']);
Route::get('/user_data', [UserController::class, 'index']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
