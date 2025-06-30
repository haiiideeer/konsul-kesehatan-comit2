@extends('layouts.app')

@section('title', 'Daftar Konsultasi')
@section('header', 'Daftar Konsultasi')

@section('content')
<a href="{{ route('user.konsultasi.create') }}" class="btn btn-primary mb-3">+ Tambah Konsultasi</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Keluhan</th>
            <th>Dokter</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($konsultasis as $item)
            <tr>
                <td>{{ $item->nama_pasien }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->keluhan }}</td>
                <td>{{ $item->dokter }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>
                    <a href="{{ route('user.konsultasi.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('user.konsultasi.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">Belum ada data.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
