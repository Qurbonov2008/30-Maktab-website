<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
public function index()
{
    $teachers = Teacher::limit(8)->get()->toArray();
    return view('teachers' , ['teachers' => $teachers]);
}
}
