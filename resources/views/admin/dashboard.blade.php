@extends('layouts.app')

@section('title', 'Dashboard')
@section('header', 'Dashboard Admin')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm border-start-primary">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-primary fw-bold">Total Pengguna</h6>
                    <h4>{{ $totalUsers }}</h4>
                </div>
                <i class="bi bi-people fs-1 text-primary"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm border-start-success">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-success fw-bold">Total Konsultasi</h6>
                    <h4>{{ $totalKonsultasi }}</h4>
                </div>
                <i class="bi bi-chat-dots fs-1 text-success"></i>
            </div>
        </div>
    </div>
</div>
@endsection
