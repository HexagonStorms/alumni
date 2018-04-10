<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Log;

class HomeController extends Controller
{
    public function index()
    {
        $students = Student::get();
        $data = [
            'students' => $students
        ];
        return view('home')->with($data);
    }

    public function studentDetail($id)
    {
        $student = Student::findOrFail($id)->with('answers');
        $data = [
            'student' => $student
        ];
        Log::info($student);
        return view('student-detail')->with($data);
    }
}
