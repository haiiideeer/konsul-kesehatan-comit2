@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    @if(auth()->user()->role === 'admin')
    <!-- Sidebar Admin -->
    <div class="col-md-3">
        <div class="list-group mb-4">
            <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action active">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
                <i class="bi bi-people-fill me-2"></i> Kelola Pengguna
            </a>
        </div>
    </div>

    <!-- Konten Admin -->
    <div class="col-md-9">
        <h4 class="mb-4">Selamat Datang, Admin!</h4>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-primary shadow">
                    <div class="card-body">
                        <h5 class="card-title">Total Pengguna</h5>
                        <p class="card-text fs-4">{{ $totalUser }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-success shadow">
                    <div class="card-body">
                        <h5 class="card-title">Total Konsultasi</h5>
                        <p class="card-text fs-4">{{ $totalKonsultasi }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-dark shadow">
                    <div class="card-body">
                        <h5 class="card-title">Total Admin</h5>
                        <p class="card-text fs-4">{{ $totalAdmin }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik (contoh pakai Chart.js) -->
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Statistik Konsultasi</h5>
                <canvas id="konsultasiChart"></canvas>
            </div>
        </div>
    </div>

    @else
    <!-- Konten User -->
    <div class="col-12">
        <h4 class="mb-4">Selamat Datang, {{ strtolower(auth()->user()->name) }}</h4>
        <p class="text-muted">Berikut ringkasan aktivitas konsultasi Anda.</p>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-success">Total Konsultasi</h5>
                        <p class="fs-3 fw-bold">{{ $userKonsultasi ?? 0 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3 d-flex align-items-end">
                <div>
                    <a href="{{ route('user.konsultasi.index') }}" class="btn btn-primary me-2">Lihat Konsultasi</a>
                    <a href="{{ route('user.konsultasi.create') }}" class="btn btn-outline-success">Buat Konsultasi Baru</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('konsultasiChart');
    if(ctx) {
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                datasets: [{
                    label: 'Jumlah Konsultasi',
                    data: [12, 19, 3, 5, 2, 3], // bisa diganti dari controller
                    backgroundColor: '#0d6efd',
                    borderRadius: 6
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
</script>
@endsection
