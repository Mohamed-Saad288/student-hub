<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CompetitionController;
use App\Http\Controllers\Api\V1\CourseController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
Route::get('/posts',[PostController::class,'index']);
Route::get('/competitions',[CompetitionController::class,'index']);
Route::get('/courses',[CourseController::class,'index']);
Route::get('/search/{name}',[CourseController::class,'search']);
Route::post('/students/{competition}/store',[StudentController::class,'store']);
