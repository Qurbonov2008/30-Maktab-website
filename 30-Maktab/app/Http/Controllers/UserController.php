<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\PopularCourses;
use App\Models\Teacher;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $courses =  PopularCourses::take(6)->get();
        $teachers = Teacher::take(4)->get()->toArray();
         return response()->view('index',  [
            'courses' => $courses,
            'teachers' => $teachers
         ]);

    }
    public function show()
    {
        return view('about');
    }
    public function store()
    {
        return view('courses');
    }
    public function teacher()
    {
        return view('teachers');
    }
    public function conatact()
    {
        return view('contact');
    }
    public function login()
    {
        view('login');
    }
}
