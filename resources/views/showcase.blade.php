@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5 fw-bold" style="color: #64B5F6;">My Showcase</h1>

    <div class="row">
        <!-- SEKSI SKILL MATRIX -->
        <div class="col-md-6 mb-4">
            <div class="card p-4 h-100">
                <h3 class="mb-4" style="color: #F06292;">Skill Matrix & Tools</h3>
                
                <div class="mb-3">
                    <label class="fw-bold">UI/UX Design (Figma)</label>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #F48FB1;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Web Development (Laravel)</label>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #90CAF9;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Mobile Dev (Flutter/Kodular)</label>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 80%; background-color: #F48FB1;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Henna Artistry</label>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 95%; background-color: #90CAF9;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEKSI PENGALAMAN ORGANISASI -->
        <div class="col-md-6 mb-4">
            <div class="card p-4 h-100">
                <h3 class="mb-4" style="color: #64B5F6;">Organizational Experience</h3>
                
                <div class="d-flex mb-3">
    <div class="flex-shrink-0">
        <!-- Logo mikrofon diganti dengan emoji orang/grup untuk merepresentasikan organisasi -->
        <span class="badge p-3 rounded-circle" style="background-color: #FCE4EC; color: #F06292;">👥</span>
    </div>
    <div class="ms-3">
        <h5 class="mb-0 fw-bold">Badan Eksekutif Mahasiswa</h5>
        <p class="text-muted small">Koordinator Kementerian Sosial dan Masyarakat</p>
        <p>Bertanggung jawab dalam mengkoordinasikan anggota dalam merancang serta melaksanakan program kerja tahunan.</p>
    </div>
</div>

                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <span class="badge p-3 rounded-circle" style="background-color: #E3F2FD; color: #42A5F5;">💻</span>
                    </div>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bold">Magang</h5>
                        <p class="text-muted small">PT Indonesia</p>
                        <p>Pemenuhan mata kuliah Praktik Kerja Lapangan (PKL).</p>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <span class="badge p-3 rounded-circle" style="background-color: #FCE4EC; color: #F06292;">✨</span>
                    </div>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bold">Creative Management</h5>
                        <p class="text-muted small">Hestii Henna Gallery</p>
                        <p>Mengelola katalog digital dan layanan jasa henna dengan sentuhan teknologi informasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection