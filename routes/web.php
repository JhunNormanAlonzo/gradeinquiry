<?php

use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get("/", [LoginController::class, 'index'])->name('login');
Route::post("/login_ne", [LoginController::class, 'login'])->name('login_me');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', UserController::class);
    Route::resource('school-year', SchoolYearController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('curriculum', CurriculumController::class);

    Route::delete('delete', [DeleteController::class, 'delete'])->name('delete');
    Route::delete('logout', [LoginController::class, 'logout'])->name('logout');
});
