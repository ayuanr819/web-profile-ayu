<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education History</title> 
    <style>
        /* ==========================================================================
           CSS NAVBAR (Navigasi Biru Atas)
           ========================================================================== */
        .navbar {
            background-color: #8ed1fc; /* Warna biru cerah sesuai gambar */
            padding: 16px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            position: sticky; /* Membuat navbar tetap di atas saat di-scroll */
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            color: #ffffff;
            font-size: 1.5em;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .navbar-menu {
            display: flex;
            gap: 30px; /* Jarak antar link */
        }

        .navbar-menu a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1.05em;
            font-weight: 500;
            transition: opacity 0.3s ease;
        }

        .navbar-menu a:hover {
            opacity: 0.7; /* Efek transparan saat di-hover */
        }

        /* ==========================================================================
           CSS UTUH: HALAMAN RIWAYAT PENDIDIKAN KREATIF
           ========================================================================== */
        body {
            background: linear-gradient(135deg, #ffebee 0%, #fce4ec 100%) !important;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .container-kreatif {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .header-section h2 {
            color: #d81b60; 
            font-size: 1.85em;
            font-weight: 700;
            margin: 0;
        }

        .btn-tambah {
            background-color: #f06292; 
            color: #ffffff;
            font-weight: 600;
            font-size: 0.95em;
            padding: 12px 24px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(240, 98, 146, 0.4);
            transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-tambah:hover {
            background-color: #e91e63;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(233, 30, 99, 0.5);
        }

        .alert-success {
            background-color: #d4edda; 
            color: #155724; 
            padding: 15px 20px; 
            border-radius: 10px; 
            margin-bottom: 25px;
            border-left: 5px solid #28a745;
            font-weight: 500;
        }

        .timeline-wrapper {
            display: flex;
            flex-direction: column;
            gap: 22px; 
        }

        .timeline-card {
            background-color: #ffffff;
            border-radius: 18px;
            padding: 22px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 10px 25px rgba(233, 30, 99, 0.07); 
            border-left: 6px solid #f06292; 
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
        }

        .timeline-card:hover {
            transform: translateX(8px); 
            box-shadow: 0 12px 30px rgba(233, 30, 99, 0.14);
        }

        .card-kiri {
            flex: 0 0 170px;
        }

        .tahun-badge {
            background-color: #fce4ec; 
            color: #c2185b; 
            padding: 8px 14px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.9em;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .icon-topi {
            font-size: 1.1em;
        }

        .card-tengah {
            flex: 1;
            padding: 0 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .nama-sekolah {
            margin: 0 0 4px 0;
            color: #2c3e50;
            font-size: 1.25em;
            font-weight: 700;
            letter-spacing: -0.2px;
        }

        .jurusan {
            margin: 0;
            color: #7f8c8d;
            font-size: 0.95em;
            font-weight: 500;
        }

        .card-kanan {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn-aksi {
            padding: 9px 22px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9em;
            text-decoration: none;
            text-align: center;
            min-width: 85px;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .btn-edit-biru {
            background-color: #00a8ff;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 168, 255, 0.3);
            border: 1px solid #00a8ff;
            display: inline-block;
        }

        .btn-edit-biru:hover {
            background-color: #0097e6;
            box-shadow: 0 6px 16px rgba(0, 151, 230, 0.4);
            transform: translateY(-1px);
        }

        .btn-hapus-outline {
            background-color: transparent;
            color: #00a8ff;
            border: 2px solid #00a8ff;
        }

        .btn-hapus-outline:hover {
            background-color: #e5f6ff;
            color: #0097e6;
            border-color: #0097e6;
        }

        .empty-state {
            text-align: center;
            padding: 40px;
            background-color: white;
            border-radius: 18px;
            color: #7f8c8d;
            box-shadow: 0 10px 25px rgba(233, 30, 99, 0.05);
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
                padding: 15px 20px;
            }
            .header-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            .timeline-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
                padding: 20px;
            }
            .card-tengah {
                padding: 0;
            }
            .card-kanan {
                width: 100%;
                justify-content: flex-end;
            }
        }

        /* ==========================================================================
           CSS FOOTER COPYRIGHT
           ========================================================================== */
        .footer-copyright {
            width: 100%;                 /* Memastikan lebar penuh */
            display: flex;
            justify-content: center;     /* Memaksa teks pas di tengah horizontal */
            align-items: center;         /* Menjaga teks pas di tengah vertikal */
            padding: 25px 20px;
            color: #4a5568; 
            font-size: 0.95em;
            border-top: 1px solid rgba(216, 27, 96, 0.15); 
            background-color: transparent;
            box-sizing: border-box;      /* Mencegah padding merusak ukuran lebar */
            margin-top: auto;            /* Mendorong footer mentok ke bawah */
        }
        
    </style>
</head> 
<body> 

    <!-- NAVIGASI ATAS -->
    <nav class="navbar">
        <div class="navbar-brand">Ayu Anggrahini</div>
        <div class="navbar-menu">
            <!-- Sesuaikan href di bawah ini dengan route/URL halaman aslimu nanti -->
            <a href="/profile">Profile</a>
            <a href="{{ route('education.index') }}">Education</a>
            <a href="/showcase">Showcase</a>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <div class="container-kreatif">
        
        <!-- Bagian Header -->
        <div class="header-section">
            <h2>Riwayat Pendidikan (Education History)</h2>
            <a href="{{ route('education.create') }}" style="text-decoration: none;">
                <button class="btn-tambah">+ Tambah Riwayat Pendidikan</button>
            </a>
        </div>

        <!-- Notifikasi Flash Session -->
        @if(session('success')) 
            <div class="alert-success"> 
                <strong>Sukses!</strong> {{ session('success') }} 
            </div> 
        @endif 

        <!-- Wrapper Kartu -->
        <div class="timeline-wrapper">
            
            <!-- Looping Data Laravel -->
            @forelse ($educations as $index => $edu)
                <div class="timeline-card">
                    <div class="card-kiri">
                        <div class="tahun-badge">
                            <span class="icon-topi">🎓</span> 
                            {{ $edu->start_year }} - {{ $edu->end_year ?? 'Masih Berlangsung' }}
                        </div>
                    </div>
                    
                    <div class="card-tengah">
                        <h3 class="nama-sekolah">{{ $edu->school_name }}</h3>
                        <p class="jurusan">{{ $edu->degree }}</p>
                    </div>
                    
                    <div class="card-kanan">
                        <a href="{{ route('education.edit', $edu->id) }}" class="btn-aksi btn-edit-biru">Edit</a>
                        
                        <form action="{{ route('education.destroy', $edu->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-aksi btn-hapus-outline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            @empty
                <!-- Tampilan jika tabel di database masih kosong -->
                <div class="empty-state">
                    Belum ada data riwayat pendidikan.
                </div>
            @endforelse

        </div>
    </div>

 <!-- FOOTER COPYRIGHT -->
    <footer class="footer-copyright">
        &copy; 2026 Ayu Anggrahini - UTS Pemrograman Web
    </footer>

</body> 
</html>