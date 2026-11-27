<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    // Tampilkan form tambah
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Simpan data baru ke database
    public function store(Request $request)
    {
        Mahasiswa::create([
            'nama'     => $request->nama,
            'jurusan'  => $request->jurusan,
            'angkatan' => $request->angkatan,
        ]);

        return redirect('/mahasiswa');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    // Update data
    public function update(Request $request, $id)
    {
        Mahasiswa::where('id', $id)->update([
            'nama'     => $request->nama,
            'jurusan'  => $request->jurusan,
            'angkatan' => $request->angkatan,
        ]);

        return redirect('/mahasiswa');
    }

    // Hapus data
    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect('/mahasiswa');
    }
}
