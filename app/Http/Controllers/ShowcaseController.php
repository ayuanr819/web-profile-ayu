<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function index()
{
    $skills = \App\Models\Skill::all();
    $experiences = \App\Models\Experience::all(); 

    // Kirim kedua data ke view
    return view('welcome', compact('skills', 'experiences'));
}
}
