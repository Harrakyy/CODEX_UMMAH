<?php

namespace App\Http\Controllers;

use App\Models\KontakPesan;
use Illuminate\Http\Request;

class KontakPesanController extends Controller
{
    public function index()
    {
        return KontakPesan::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_perusahaan' => 'required|string',
            'nama_depan' => 'required|string',
            'nama_belakang' => 'required|string',
            'jabatan' => 'required|string',
            'email' => 'required|email',
            'nomor_telepon' => 'required|string',
            'pesan' => 'required|string',
        ]);

        return KontakPesan::create($data);
    }

    public function show($id)
    {
        return KontakPesan::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $kontak = KontakPesan::findOrFail($id);
        $kontak->update($request->only([
            'nama_perusahaan', 'nama_depan', 'nama_belakang',
            'jabatan', 'email', 'nomor_telepon', 'pesan'
        ]));
        return $kontak;
    }

    public function destroy($id)
    {
        return KontakPesan::destroy($id);
    }
}
