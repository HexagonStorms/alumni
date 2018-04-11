<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Log;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query("full_name");
        $students = Student::where("full_name", "like", "%$query%")->get();
        $data = [
            "students" => $students,
            "query" => $query
        ];
        return view("home")->with($data);
    }

    public function viewProjects(Request $request)
    {
        $query = $request->query("full_name");
        // Projects go here
        // $students = Student::where("full_name", "like", "%$query%")->get();
        $data = [
            // "students" => $students,
            "query" => $query
        ];
        return view("home")->with($data);
    }

    public function studentDetail($id)
    {
        $student = Student::where("id", $id)->with("studentAnswers.question")->first();
        $data = [
            "student" => $student
        ];
        return view("student-detail")->with($data);
    }
}
