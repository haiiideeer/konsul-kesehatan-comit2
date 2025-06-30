@extends('layouts.app')

@section('title', 'Dashboard Admin')
@section('header', 'Selamat Datang, Admin!')

@section('content')
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card bg-primary text-white shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total Pengguna</h5>
                <p class="card-text fs-3">{{ \App\Models\User::count() }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-success text-white shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total Konsultasi</h5>
                <p class="card-text fs-3">{{ \App\Models\Konsultasi::count() }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-dark text-white shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total Admin</h5>
                <p class="card-text fs-3">{{ \App\Models\User::where('role', 'admin')->count() }}</p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-start">
    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary">
        <i class="bi bi-people-fill"></i> Kelola Pengguna
    </a>
</div>
@endsection
