<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
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
        view('Auth.login');
    }
}