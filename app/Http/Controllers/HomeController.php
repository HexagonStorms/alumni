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
}
