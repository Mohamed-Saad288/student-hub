<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {

        return view('course.index', ['courses' =>
            Course::
            latest()->filter
            (request(['search']))
                ->SimplePaginate(9)->withQueryString()

        ]);
    }
}
