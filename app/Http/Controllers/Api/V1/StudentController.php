<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Competition;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Competition $competition, StudentRequest $request)
    {

        $competition->student()->create($request->all());

        return response('student created successfully',201);
    }
}
