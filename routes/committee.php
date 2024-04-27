<?php

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




Route::get('/art',function () {
   return view('committee.art');
});

Route::get('/cultural',function () {
    return view('committee.cultural');
});

Route::get('/family',function () {
    return view('committee.family');
});

Route::get('/science',function () {
    return view('committee.science');
});

Route::get('/social',function () {
    return view('committee.social');
});

Route::get('/sports',function () {
    return view('committee.sports');
});

Route::get('/takeful',function () {
    return view('committee.takeful');
});

Route::get('/travel',function () {
    return view('committee.travel');
});




