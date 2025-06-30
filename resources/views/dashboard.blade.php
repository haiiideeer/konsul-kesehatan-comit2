@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        {{-- Sidebar --}}
        <div class="col-md-3">
            <div class="list-group shadow-sm mb-4">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action active">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
                <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
                    <i class="bi bi-people-fill me-2"></i> Kelola Pengguna
                </a>
            </div>
        </div>

        {{-- Konten --}}
        <div class="col-md-9">
            <div class="mb-4">
                <h4 class="fw-bold">Selamat Datang, Admin!</h4>
                <p class="text-muted">Berikut ringkasan data sistem.</p>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-white bg-primary">
                        <div class="card-body">
                            <h6 class="card-title"><i class="bi bi-person-lines-fill me-2"></i>Total Pengguna</h6>
                            <h3 class="fw-bold">{{ \App\Models\User::count() }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-white bg-success">
                        <div class="card-body">
                            <h6 class="card-title"><i class="bi bi-chat-left-dots-fill me-2"></i>Total Konsultasi</h6>
                            <h3 class="fw-bold">{{ \App\Models\Konsultasi::count() }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-white bg-dark">
                        <div class="card-body">
                            <h6 class="card-title"><i class="bi bi-shield-lock-fill me-2"></i>Total Admin</h6>
                            <h3 class="fw-bold">{{ \App\Models\User::where('role', 'admin')->count() }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary">
                    <i class="bi bi-people-fill me-1"></i> Kelola Pengguna
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
