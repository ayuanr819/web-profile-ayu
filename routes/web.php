<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationHistoryController;
use App\Http\Controllers\SkillController;

Route::get('/', [SkillController::class, 'index']);

// ========================================== 
// ROUTE CRUD EDUCATION HISTORY 
// ========================================== 
 
// 1. Menampilkan daftar data (READ) 
Route::get('/education', [EducationHistoryController::class, 'index'])->name('education.index'); 
 
// 2. Menampilkan form tambah data (CREATE) 
Route::get('/education/create', [EducationHistoryController::class, 
'create'])->name('education.create'); 
 
// 3. Memproses penyimpanan data baru (STORE) 
// Perhatikan: Menggunakan method POST 
Route::post('/education', [EducationHistoryController::class, 'store'])->name('education.store'); 
 
// 4. Menampilkan form edit data spesifik berdasarkan ID (EDIT) 
Route::get('/education/{id}/edit', [EducationHistoryController::class, 
'edit'])->name('education.edit'); 
 
// 5. Memproses pembaruan data (UPDATE) 
// Perhatikan: Menggunakan method PUT untuk pembaruan data 
Route::put('/education/{id}', [EducationHistoryController::class, 
'update'])->name('education.update'); 
 
// 6. Memproses penghapusan data (DELETE) 
// Perhatikan: Menggunakan method DELETE 
Route::delete('/education/{id}', [EducationHistoryController::class, 
'destroy'])->name('education.destroy'); 


Route::get('/profile', function () {
    return view('profile', [ 
'title' => 'Home Page', 
'name' => 'Ayu Anggrahini' 
]); 
});

Route::get('/showcase', function () {
    return view('showcase');
});