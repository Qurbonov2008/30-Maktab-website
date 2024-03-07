<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about():View
    {
           $abouts =  About::limit(3)->get()->toArray();

            return view('about', ['abouts'=>$abouts]);
    }
   
    
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
    public function name()
    {
        return  About::all('name');
    }
}
