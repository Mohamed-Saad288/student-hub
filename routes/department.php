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


// chemistry programs
Route::get('chemistry-program1',function ()
{
    return view('department.chemistry-program1');

})->name('chemistry.program1');


Route::get('chemistry-program2',function ()
{
    return view('department.chemistry-program2');

})->name('chemistry.program2');


Route::get('chemistry-program3',function ()
{
    return view('department.chemistry-program3');

})->name('chemistry.program3');



Route::get('chemistry-program4',function ()
{
    return view('department.chemistry-program4');

})->name('chemistry.program4');

Route::get('chemistry-program5',function ()
{
    return view('department.chemistry-program5');

})->name('chemistry.program5');












Route::get('/physics',function ()
{

    return view('department.physics');


})->name('physics');

//physics programs

Route::get('/physics-program1',function ()
{

    return view('department.physics-program1');


})->name('physics.program1');

Route::get('/physics-program2',function ()
{

    return view('department.physics-program2');


})->name('physics.program2');

Route::get('/physics-program3',function ()
{

    return view('department.physics-program3');


})->name('physics.program3');



Route::get('/math',function ()
{

    return view('department.math');

})->name('math');

// math programs

Route::get('/math-program1',function ()
{

    return view('department.math-program1');

})->name('math.program1');


Route::get('/math-program2',function ()
{

    return view('department.math-program2');

})->name('math.program2');








Route::get('/animal',function ()
{

    return view('department.animal');


})->name('animal');

// animal programs

Route::get('/animal-program1',function ()
{

    return view('department.animal-program1');


})->name('animal.program1');


Route::get('/animal-program2',function ()
{

    return view('department.animal-program2');


})->name('animal.program2');


Route::get('/geology',function ()
{

    return view('department.geology');


})->name('geology');

// geology programs
Route::get('/geology-program1',function ()
{

    return view('department.geology-program1');


})->name('geology.program1');

Route::get('/geology-program2',function ()
{

    return view('department.geology-program2');


})->name('geology.program2');

Route::get('/geology-program3',function ()
{

    return view('department.geology-program3');


})->name('geology.program3');




Route::get('/plant',function ()
{

    return view('department.plant');


})->name('plant');

// plant programs

Route::get('/plant-program1',function ()
{

    return view('department.plant-program1');


})->name('plant.program1');

Route::get('/plant-program2',function ()
{

    return view('department.plant-program2');


})->name('plant.program2');

Route::get('/plant-program3',function ()
{

    return view('department.plant-program3');


})->name('plant.program3');
