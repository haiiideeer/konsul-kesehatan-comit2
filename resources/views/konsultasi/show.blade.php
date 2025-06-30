<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Konsultasi
        </h2>
    </x-slot>

    <div class="py-4 px-6">
        <div class="bg-white p-6 rounded shadow">
            <p><strong>Nama Pasien:</strong> {{ $konsultasi->nama_pasien }}</p>
            <p><strong>Email:</strong> {{ $konsultasi->email }}</p>
            <p><strong>Keluhan:</strong> {{ $konsultasi->keluhan }}</p>
            <p><strong>Dokter:</strong> {{ $konsultasi->dokter }}</p>
            <p><strong>Tanggal:</strong> {{ $konsultasi->tanggal }}</p>

            <a href="{{ route('user.konsultasi.index') }}" class="mt-4 inline-block text-sm text-blue-600 underline">← Kembali ke Daftar</a>
        </div>
    </div>
</x-app-layout>
