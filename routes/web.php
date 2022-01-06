<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PulicExamController;
use App\Http\Controllers\PulicHomeController;
use App\Http\Controllers\PulicQuestionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::resource('exam', ExamController::class);
Route::resource('admin', AdminController::class)->middleware('Admin');
Route::resource('user', UserController::class);
Route::resource('question', QuestionController::class);
Route::resource('exams', PulicExamController::class);
Route::resource('questions', PulicQuestionController::class)->middleware('auth');
Route::resource('/', PulicHomeController::class);
Route::resource('result', ResultController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




