@extends('layouts.app')

@section('title', 'Data Konsultasi')
@section('content')
<div class="container-fluid">
    <h4 class="mb-4">📋 Data Konsultasi</h4>

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <strong>Daftar Konsultasi Pasien</strong>
            <a href="{{ route('konsultasi.create') }}" class="btn btn-primary btn-sm">+ Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead class="table-light">
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
                    @foreach($konsultasis as $item)
                    <tr>
                        <td>{{ $item->nama_pasien }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->keluhan }}</td>
                        <td><span class="badge bg-info">{{ $item->dokter }}</span></td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('konsultasi.show', $item->id) }}" class="btn btn-sm btn-primary">👁️ View</a>
                            <form action="{{ route('konsultasi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">🗑️ Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination jika menggunakan paginate() -->
            <div class="mt-3">
                {{ $konsultasis->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
