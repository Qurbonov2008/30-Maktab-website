<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $abouts =  About::limit(3)->get()->toArray();

        return view('index', ['abouts'=>$abouts]);
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
