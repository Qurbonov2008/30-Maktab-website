<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::limit(8)->get()->toArray();
        return view('teachers', ['teachers' => $teachers]);
    }
    public function show()
    {
        $teachers = Teacher::all();
        return view('Admin.Teacher.index', ['teachers' => $teachers]);
    }
    public function get_create()
    {
        return view('Admin.Teacher.create');
    }
    public function create(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'requied',
                'full_name' => 'required',
                'job' => 'required'
            ]
        );
        if (!isset($validator)) {
            return view('Admin.Teacher.create');
        } else {
            Teacher::create(
                [
                    'image' => $request->image,
                    'full_name' => $request->full_name,
                    'job' => $request->job
                ]
            );
        }
        return redirect()->intended('Admin_teachers');
    }
    public function get_teacher()
    {
        return view('Admin.Teacher.edit');
    }
}
