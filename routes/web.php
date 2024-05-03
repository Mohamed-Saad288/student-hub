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

// home route
Route::get('/', [PostController::class, 'index']);

// auth routs
require __DIR__.'/auth.php';

// group with auth middleware
Route::middleware('auth')->group(function () {
    // get all courses route
    Route::get('/courses', [CourseController::class, 'index'])
        ->name('courses.index');
    // get all competitions route
    Route::get('/competitions', [CompetitionController::class, 'index'])
        ->name('competitions.index');
    // register to competition route
    Route::get('/{competition:slug}', [StudentController::class, 'create'])
        ->name('student.create');
    // store student data in database
    Route::post('/student/{competition}/store', [StudentController::class, 'store'])
        ->name('student.store');
});

// department route
require __DIR__.'/department.php';

