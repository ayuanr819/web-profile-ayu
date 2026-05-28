<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Education History</title>
    <style>
        /* ==========================================================================
           CSS HALAMAN TAMBAH RIWAYAT PENDIDIKAN
           ========================================================================== */
        
        body {
            background: linear-gradient(135deg, #ffebee 0%, #fce4ec 100%) !important;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 600px;
            margin: 40px 20px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(233, 30, 99, 0.1);
            border-top: 6px solid #f06292;
        }

        .form-header {
            margin-bottom: 30px;
            text-align: center;
            position: relative;
        }

        .btn-back {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            text-decoration: none;
            color: #7f8c8d;
            font-weight: 600;
            font-size: 0.9em;
            transition: color 0.2s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .btn-back:hover {
            color: #e91e63;
        }

        .form-header h2 {
            color: #d81b60;
            margin: 0;
            font-size: 1.8em;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-row .form-group {
            flex: 1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 0.95em;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1em;
            color: #34495e;
            background-color: #f8fafc;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #f06292;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(240, 98, 146, 0.1);
        }

        .text-danger {
            color: #e74c3c;
            font-size: 0.85em;
            margin-top: 6px;
            display: block;
            font-weight: 500;
        }

        .helper-text {
            display: block;
            margin-top: 6px;
            font-size: 0.85em;
            color: #95a5a6;
            font-style: italic;
        }

        .btn-submit {
            width: 100%;
            background-color: #00a8ff;
            color: white;
            border: none;
            padding: 16px;
            border-radius: 12px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 6px 15px rgba(0, 168, 255, 0.3);
            margin-top: 15px;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0097e6;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 151, 230, 0.4);
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 30px 20px;
            }
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            .btn-back {
                position: static;
                transform: none;
                justify-content: center;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        
        <div class="form-header">
            <a href="{{ route('education.index') }}" class="btn-back">← Kembali</a>
            <h2>Tambah Riwayat</h2>
        </div>

        <!-- Form Tambah Data (Diarahkan ke method store di Controller) -->
        <form action="{{ route('education.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="school_name">Nama Sekolah / Universitas</label>
                <input type="text" id="school_name" name="school_name" value="{{ old('school_name') }}" placeholder="Contoh: SMA N 3 Sukoharjo" required>
                @error('school_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="degree">Gelar / Jenjang</label>
                <input type="text" id="degree" name="degree" value="{{ old('degree') }}" placeholder="Contoh: Sekolah Menengah Atas" required>
                @error('degree')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="start_year">Tahun Mulai</label>
                    <input type="number" id="start_year" name="start_year" value="{{ old('start_year') }}" placeholder="Contoh: 2021" required>
                    @error('start_year')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="end_year">Tahun Selesai</label>
                    <input type="number" id="end_year" name="end_year" value="{{ old('end_year') }}" placeholder="Contoh: 2024">
                    <small class="helper-text">*Kosongkan jika masih aktif sekolah/kuliah</small>
                    @error('end_year')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn-submit">Simpan Data</button>
        </form>

    </div>

</body>
</html>