<?php

namespace App\Http\Controllers;

use App\Models\PopularCourses;
use Illuminate\Http\Request;

class PopularCoursesController extends Controller
{
   
    public function show()
    {
        $courses =  PopularCourses::limit(6)->get()->toArray();

        return view('courses', ['courses'=>$courses]);
    }
}
