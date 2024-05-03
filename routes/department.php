<?php


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

Route::get('/chemistry',function ()
{
    return view('department.chemistry');

})->name('chemistry');

Route::get('/physics',function ()
{

    return view('department.physics');


})->name('physics');


Route::get('/math',function ()
{

    return view('department.math');

})->name('math');


Route::get('/animal',function ()
{

    return view('department.animal');


})->name('animal');

Route::get('/geology',function ()
{

    return view('department.geology');


})->name('geology');

Route::get('/plant',function ()
{

    return view('department.plant');


})->name('plant');
