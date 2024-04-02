<?php

namespace App\Http\Controllers;

use App\Models\PopularCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PopularCoursesController extends Controller
{
   
    public function show()
    {
        $courses =  PopularCourses::limit(6)->get()->toArray();

        return view('courses', ['courses'=>$courses]);
    }
    public function index()
    {
        $courses = PopularCourses::all();
        return view('Admin.Courses.index' , ['courses' => $courses]);
    }
    public function get_course()
    {
        return view('Admin.Courses.create');
    }

    public function new_course(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'required',
                'time' => 'required',
                'name' => 'required',
                'money' => 'required'
            ]);
            if(!isset($validator)){
                 return view('Admin.Courses.create');
            }else{
                PopularCourses::create([
                    'image'  => $request -> image,
                    'time' => $request -> time,
                    'name' => $request -> name,
                    'money' => $request -> money,
                ]);
            }
            return redirect()->intended('Admin_course');
    }
}
