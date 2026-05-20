<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationHistoryController;
use App\Http\Controllers\SkillController;

Route::get('/', [SkillController::class, 'index']);

Route::get('/education', [EducationHistoryController::class, 'index']);


Route::get('/profile', function () {
    return view('profile', [ 
'title' => 'Home Page', 
'name' => 'Ayu Anggrahini' 
]); 
});

Route::get('/showcase', function () {
    return view('showcase');
});