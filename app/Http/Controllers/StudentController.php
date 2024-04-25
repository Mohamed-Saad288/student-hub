<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Competition;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Competition $competition)
    {
        return view('student.create', ['competition' => $competition]);
    }
    public function store(StudentRequest $request , Competition $competition)
    {
        Student::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'college_id' => $request['college_id'],
            'level' => $request['level'],
            'department' => $request['department'],
            'competition_id' => $competition->id
        ]);
        return redirect('/');
    }
}
