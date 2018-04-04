<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

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
        $student = Student::findOrFail($id);
        $data = [
            'student' => $student
        ];
        return view('student-detail')->with($data);
    }
}
