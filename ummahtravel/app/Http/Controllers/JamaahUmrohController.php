<?php

namespace App\Http\Controllers;

use App\Models\JamaahUmroh;
use Illuminate\Http\Request;

class JamaahUmrohController extends Controller
{
    public function index()
    {
        return JamaahUmroh::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'email' => 'required|email',
            'nama' => 'required|string',
            'nomor_telepon' => 'required|string',
            'tanggal_keberangkatan' => 'required|date',
        ]);

        return JamaahUmroh::create($data);
    }

    public function show($id)
    {
        return JamaahUmroh::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $jamaah = JamaahUmroh::findOrFail($id);
        $jamaah->update($request->only(['user_id', 'email', 'nama', 'nomor_telepon', 'tanggal_keberangkatan']));
        return $jamaah;
    }

    public function destroy($id)
    {
        return JamaahUmroh::destroy($id);
    }
}
