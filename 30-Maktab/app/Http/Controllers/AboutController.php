<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function about():View
    {
        return view('about');
    }
    public function name()
    {
        return  About::all('name');
    }
}
