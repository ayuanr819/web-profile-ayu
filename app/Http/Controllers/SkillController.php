<?php

namespace App\Http\Controllers;

use App\Models\Skill; 
use Illuminate\View\View;

class SkillController extends Controller
{
    public function index()
{
    $skills = \App\Models\Skill::all();
    $experiences = \App\Models\Experience::all(); 

    return view('welcome', [
        'skills' => $skills,
        'experiences' => $experiences
    ]);
}
}