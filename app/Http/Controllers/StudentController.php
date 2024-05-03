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
        $competition->student()->create($request->all());

        return redirect('/')->with('success','تم التسجيل  بنجاح انتظر رساله');
    }
}
