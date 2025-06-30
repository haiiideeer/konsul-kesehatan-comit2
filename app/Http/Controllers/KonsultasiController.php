<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasis = Konsultasi::where('user_id', auth()->id())->get();
        return view('konsultasi.index', compact('konsultasis'));
    }

    public function create()
    {
        return view('konsultasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'email' => 'required|email',
            'keluhan' => 'required|string',
            'dokter' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        Konsultasi::create([
            'nama_pasien' => $request->nama_pasien,
            'email' => $request->email,
            'keluhan' => $request->keluhan,
            'dokter' => $request->dokter,
            'tanggal' => $request->tanggal,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('user.konsultasi.index')->with('success', 'Konsultasi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $konsultasi = Konsultasi::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('konsultasi.show', compact('konsultasi'));
    }

    public function edit($id)
    {
        $konsultasi = Konsultasi::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('konsultasi.edit', compact('konsultasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'email' => 'required|email',
            'keluhan' => 'required|string',
            'dokter' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $konsultasi = Konsultasi::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $konsultasi->update($request->all());

        return redirect()->route('user.konsultasi.index')->with('success', 'Konsultasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $konsultasi = Konsultasi::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $konsultasi->delete();

        return redirect()->route('user.konsultasi.index')->with('success', 'Konsultasi berhasil dihapus.');
    }
}
