<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();

        return CourseResource::collection($courses);
    }
    public function search($name)
    {


        $courses = Course::where('name', 'like', "%{$name}%")
                 ->orWhere('description', 'like', "%{$name}%")
                  ->orWhere('instructor','like',"%{$name}%")
                 ->get();

            return \response($courses,200);
    }
}
