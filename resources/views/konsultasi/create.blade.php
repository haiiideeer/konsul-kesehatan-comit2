@extends('layouts.app')

@section('title', 'Buat Konsultasi')
@section('header', 'Buat Konsultasi Baru')

@section('content')
<form method="POST" action="{{ route('user.konsultasi.store') }}">
    @csrf

    <div class="mb-3">
        <label for="nama_pasien" class="form-label">Nama Pasien</label>
        <input type="text" name="nama_pasien" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="keluhan" class="form-label">Keluhan</label>
        <textarea name="keluhan" class="form-control" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label for="dokter" class="form-label">Dokter</label>
        <input type="text" name="dokter" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal Konsultasi</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('user.konsultasi.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
