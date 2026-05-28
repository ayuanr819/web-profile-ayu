@extends('layouts.app')

@section('content')

<style>
    /* Card */
    .profile-card {
    width: 350px;
    padding: 30px;
    border-radius: 25px;

    background: #EC407A; 
    box-shadow: 0 15px 35px rgba(236, 64, 122, 0.3);
    text-align: center;
    transition: 0.3s;
    color: #FFFFFF; 
}

.profile-card h1 {
    font-size: 24px;
    font-weight: bold;
    color: #FFFFFF;
}

.role {
    color: #E3F2FD; 
    font-weight: 600;
    font-size: 15px;
}

.desc {
    font-size: 14px;
    color: #FCE4EC; 
    margin-bottom: 20px;
}

.info p {
    margin: 8px 0;
    color: #FFFFFF;
}

.social a {
    color: #E3F2FD; 
    font-weight: bold;
}

.social a:hover {
    color: #1A237E;
}
    /* Image */
    .profile-img {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        border: 3px solid #38bdf8;
        margin-bottom: 15px;
        object-fit: cover;
    }

    /* Name */
    .profile-card h1 {
        font-size: 22px;
        margin-bottom: 5px;
    }

    /* Role */
    .role {
        color: #38bdf8;
        font-size: 14px;
        margin-bottom: 15px;
    }

    /* Description */
    .desc {
        font-size: 13px;
        color: #cbd5f5;
        margin-bottom: 20px;
    }

    /* Info */
    .info {
        text-align: left;
        font-size: 13px;
        margin-bottom: 20px;
    }

    .info p {
        margin: 5px 0;
    }

    /* Social */
    .social {
        margin-bottom: 20px;
    }

    .social a {
        display: inline-block;
        margin: 0 8px;
        font-size: 14px;
        text-decoration: none;
        color: #38bdf8;
        transition: 0.3s;
    }

    .social a:hover {
        color: white;
    }

    /* Button Custom (Updated for WhatsApp Link) */
    .btn-custom {
        display: inline-block; 
        padding: 10px 25px;
        border-radius: 25px;
        border: none;
        background: linear-gradient(135deg, #38bdf8, #6366f1);
        color: white !important; 
        text-decoration: none; 
        cursor: pointer;
        transition: 0.3s;
        font-size: 14px;
        font-weight: bold;
    }

    .btn-custom:hover {
        opacity: 0.9;
        color: white !important;
        transform: scale(1.05); 
    }

    /* Efek interaktif untuk link Email */
    .email-link {
        color: #FFFFFF;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        display: inline-block; 
    }

    /* Saat kursor diarahkan ke email (Hover) */
    .email-link:hover {
        color: #38bdf8; 
        transform: translateY(-2px); 
    }

    /* Saat email diklik (Active/Ditekan) */
    .email-link:active {
        color: #FCE4EC; 
        transform: scale(0.90); 
    }

    

</style>

<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="profile-card">
    
        
        <img src="{{ asset('image/inisial profile.jpg') }}" class="profile-img">

        <h1>{{ $name }}</h1>
        <p class="role">UI/UX & Web Developer</p>

        <p class="desc">
            Fokus pada pengembangan web modern, UI/UX, dan teknologi berbasis AI.
        </p>

        <div class="info">
            <p><strong>Email:</strong> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=24.ayu.anggrahini@poltekindonusa.ac.id" target="_blank" class="email-link">24.ayu.anggrahini@poltekindonusa.ac.id</a></p>
            <p><strong>Minat:</strong> Laravel, Flutter, Figma</p>
        </div>

        <div class="social">
            <a href="https://www.instagram.com/aayu.ar__?igsh=MTR1MnJ0cjdydmV0NQ==">Instagram</a>
            <a href="https://www.tiktok.com/@aayuanr?_r=1&_t=ZS-967w6iATWiq">TikTok</a>
            <a href="https://github.com/ayuanr819">GitHub</a>
        </div>

<a href="https://wa.me/62895322659735?text=Halo%20Ayu,%20saya%20tertarik%20dengan%20profil%20Anda" 
   class="btn-custom text-decoration-none">
   Contact Me
</a>
    </div>
</div>
@endsection