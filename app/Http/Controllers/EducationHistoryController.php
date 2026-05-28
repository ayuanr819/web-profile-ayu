<?php

namespace App\Http\Controllers;

use App\Models\EducationHistory;
use Illuminate\Http\Request;

class EducationHistoryController extends Controller
{
    // 1. READ: Menampilkan semua data dari database (Urutan Terbaru di Atas)
    public function index()
    {
        // Mengambil data menggunakan Eloquent Model dan diurutkan berdasarkan start_year secara descending
        // Ini akan membuat Politeknik Indonusa Surakarta (2024) di atas dan SMA N 3 SUKOHARJO (2021) di bawah
        $educations = EducationHistory::orderBy('start_year', 'desc')->get();

        return view('education.index', [
            'educations' => $educations
        ]);
    }

    /** * 2. CREATE: Menampilkan halaman form tambah data 
     */ 
    public function create() 
    { 
        // Catatan: Ini akan mencari file create.blade.php di dalam folder resources/views/education/
        return view('education.create'); 
    } 
 
    /** * 3. STORE: Memproses data dari form dan menyimpannya ke database 
     */ 
    public function store(Request $request) 
    { 
        // 1. Validasi input data dari form 
        $request->validate([ 
            'school_name' => 'required|string|max:255', 
            'degree'      => 'required|string|max:255', 
            'start_year'  => 'required|numeric|digits:4', 
            'end_year'    => 'nullable|numeric|digits:4', 
        ]); 
 
        // 2. Menyimpan data ke database menggunakan Eloquent ORM (Mass Assignment) 
        EducationHistory::create($request->all()); 
 
        // 3. Mengarahkan kembali ke halaman index dengan pesan sukses 
        return redirect()->route('education.index') 
                         ->with('success', 'Data riwayat pendidikan berhasil ditambahkan!'); 
    }

    /** * 4. EDIT: Mengambil satu baris data berdasarkan ID untuk ditampilkan pada form edit 
     */ 
    public function edit($id) 
    { 
        // Eloquent 'findOrFail' akan mencari data berdasarkan ID. 
        $education = EducationHistory::findOrFail($id); 
         
        return view('education.edit', compact('education')); 
    } 
 
    /** * 5. UPDATE: Memperbarui data di database berdasarkan inputan dari form 
     */ 
    public function update(Request $request, $id) 
    { 
        // 1. Validasi input data 
        $request->validate([ 
            'school_name' => 'required|string|max:255', 
            'degree'      => 'required|string|max:255', 
            'start_year'  => 'required|numeric|digits:4', 
            'end_year'    => 'nullable|numeric|digits:4', 
        ]); 
 
        // 2. Mencari data yang akan diperbarui 
        $education = EducationHistory::findOrFail($id); 
 
        // 3. Memperbarui data menggunakan metode Eloquent 
        $education->update($request->all()); 
 
        // 4. Mengarahkan kembali ke halaman index dengan pesan sukses 
        return redirect()->route('education.index') 
                         ->with('success', 'Data riwayat pendidikan berhasil diperbarui!'); 
    }

    /** * 6. DESTROY: Menghapus data secara permanen dari database 
     */ 
    public function destroy($id) 
    { 
        // 1. Mencari data berdasarkan ID 
        $education = EducationHistory::findOrFail($id); 
 
        // 2. Mengeksekusi perintah hapus menggunakan Eloquent 
        $education->delete(); 
 
        // 3. Mengarahkan kembali ke halaman index dengan pesan sukses 
        return redirect()->route('education.index') 
                         ->with('with', 'Data riwayat pendidikan berhasil dihapus!'); 
    }   
}