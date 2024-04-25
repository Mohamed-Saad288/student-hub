<?php

use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
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

require __DIR__.'/auth.php';


Route::get('/',[PostController::class,'index']);


Route::middleware('auth')->group(function (){

    Route::get('/courses',[CourseController::class,'index'])
        ->name('courses.index');

    Route::get('/competitions',[CompetitionController::class,'index'])
        ->name('competition.index');

    Route::get('{competition:slug}',[StudentController::class,'create'])
        ->name('student.create');

    Route::post('student/{competition}/store',[StudentController::class,'store'])
        ->name('student.store');

    Route::get('posts/{post:slug}',PostController::class,'show');
});


