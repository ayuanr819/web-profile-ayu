<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Profile - Ayu B24006</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body { 
        background-color: #FCE4EC; /* Soft Pink Background */
        color: #455A64;
    }
    .navbar {
        background-color: #90CAF9 !important; /* Pastel Blue Navbar */
    }
    .navbar-brand, .nav-link {
        color: #fff !important;
    }
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
</style>

</head>
<body>

    <!-- Navigasi Sederhana -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Ayu Anggrahini</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/profile">Profile</a>
                <a class="nav-link" href="/education">Education</a>
                <a class="nav-link" href="/showcase">Showcase</a>
            </div>
        </div>
    </nav>

    <!-- Tempat Isi Konten Halaman (Pendidikan, dll) -->
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <footer class="text-center py-4 mt-5 border-top">
    <p class="text-muted">&copy; 2026 Ayu Anggrahini - UTS Pemrograman Web</p>
</footer>


</body>
</html>