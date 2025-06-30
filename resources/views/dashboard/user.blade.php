@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row g-4">
        <div class="col-12">
            <h2 class="fw-bold text-primary">Selamat Datang, {{ Auth::user()->name }}</h2>
            <p class="text-muted">Berikut ringkasan aktivitas konsultasi Anda.</p>
        </div>

        <!-- Statistik Ringkas -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-success">Total Konsultasi</h5>
                    <h3 class="fw-bold">{{ $totalKonsultasi ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-info">Jadwal Konsultasi Terdekat</h5>
                    <p class="fw-bold">{{ $jadwalTerdekat ?? 'Tidak ada' }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-warning">Dokter Favorit</h5>
                    <p class="fw-bold">{{ $dokterFavorit ?? 'Belum ada' }}</p>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="col-12 mt-4">
            <a href="{{ route('user.konsultasi.index') }}" class="btn btn-primary me-2">Lihat Konsultasi</a>
            <a href="{{ route('user.konsultasi.create') }}" class="btn btn-outline-success">Buat Konsultasi Baru</a>
        </div>
    </div>
</div>
@endsection
