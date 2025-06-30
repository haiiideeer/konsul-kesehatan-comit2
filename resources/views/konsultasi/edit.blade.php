<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Konsultasi
        </h2>
    </x-slot>

    <div class="py-4 px-6">
        <form action="{{ route('user.konsultasi.update', $konsultasi->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="mb-4">
                <label>Nama Pasien</label>
                <input type="text" name="nama_pasien" value="{{ $konsultasi->nama_pasien }}" class="w-full border px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" value="{{ $konsultasi->email }}" class="w-full border px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label>Keluhan</label>
                <textarea name="keluhan" class="w-full border px-3 py-2" required>{{ $konsultasi->keluhan }}</textarea>
            </div>

            <div class="mb-4">
                <label>Dokter</label>
                <input type="text" name="dokter" value="{{ $konsultasi->dokter }}" class="w-full border px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="{{ $konsultasi->tanggal }}" class="w-full border px-3 py-2" required>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2">Update</button>
        </form>
    </div>
</x-app-layout>
