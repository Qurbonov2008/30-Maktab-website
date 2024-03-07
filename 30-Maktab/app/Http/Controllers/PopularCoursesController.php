<?php

namespace App\Http\Controllers;

use App\Models\PopularCourses;
use Illuminate\Http\Request;

class PopularCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $courses =  PopularCourses::limit(6)->get()->toArray();

        return view('courses', ['courses'=>$courses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PopularCourses $popularCourses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PopularCourses $popularCourses)
    {
        //
    }
}
