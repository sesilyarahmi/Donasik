<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donasis = Donasi::all();
        return view('FiturDonasi.index', compact('donasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('FiturDonasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe_donasi' => 'required',
            'nama_donatur' => 'required',
            'info_kontak' => 'required',
            'deskripsi' => 'nullable',
            'jumlah' => 'nullable|numeric',
            'nama_barang' => 'nullable|string',
        ]);

        Donasi::create($request->all());
        return redirect()->route('donasi.index')->with('success', 'Donasi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donasi $donasi)
    {
        return view('FiturDonasi.show', compact('donasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donasi $donasi)
    {
        return view('FiturDonasi.edit', compact('donasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donasi $donasi)
    {
        {
            $request->validate([
                'tipe_donasi' => 'required',
                'nama_donatur' => 'required',
                'info_kontak' => 'required',
                'deskripsi' => 'nullable',
                'jumlah' => 'nullable|numeric',
                'nama_barang' => 'nullable|string',
            ]);
    
            $donasi->update($request->all());
            return redirect()->route('donasi.index')->with('success', 'Donasi berhasil diperbarui!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donasi $donasi)
    {
        $donasi->delete();
        return redirect()->route('donasi.index')->with('success', 'Donasi berhasil dihapus!');
    }
}
