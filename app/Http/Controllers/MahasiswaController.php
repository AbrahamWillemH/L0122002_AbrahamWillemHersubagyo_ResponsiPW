<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('index', ['mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->ipk = $request->input('ipk');
        $mahasiswa->save();

        return redirect('/');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return $mahasiswa;
    }

    public function edit(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('/edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $id)
    {
        $mahasiswa = $request->all;
        $mahasiswa['nama'] = $request->nama;
        $mahasiswa['nim'] = $request->nim;
        $mahasiswa['ipk'] = $request->ipk;

        Mahasiswa::whereId($id)->update($mahasiswa);

        return redirect('/');
    }

    public function destroy(Request $request)
{
    $mahasiswa = Mahasiswa::findOrFail($request->id);
    $mahasiswa->delete();

    return redirect('/')->with('success', 'Mahasiswa berhasil dihapus');
}
}
