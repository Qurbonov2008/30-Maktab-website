<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\PopularCourses;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $courses =  PopularCourses::limit(6)->get();

        return view('index', ['courses'=>$courses]);
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
