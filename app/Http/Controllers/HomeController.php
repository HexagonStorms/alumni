<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\ProjectStudent;
use App\Project;
use Log;

class HomeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }


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
        $query = $request->query("name");
        // Projects go here
        $projects = Project::where("name", "like", "%$query%")->with('projectStudents.student')->get();
        // return json_encode($projects);
        $data = [
            "projects" => $projects,
            "query" => $query
        ];
        return view("projects")->with($data);
    }

    public function studentDetail($id)
    {
        $student = Student::where("id", $id)->with("studentAnswers.question")->first();
        $projects = ProjectStudent::where('student_id', $id)->with('project')->get();
        $data = [
            "student" => $student,
            "projects" => $projects
        ];
        return view("student-detail")->with($data);
    }
}
