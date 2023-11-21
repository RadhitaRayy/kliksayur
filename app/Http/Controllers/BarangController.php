<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('barang.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       DB::table('barang')->insert([
        'nama_barang' => $request->nama_barang,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'keterangan' => $request->keterangan,
       ]);

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Tersimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::find($id);

        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['nama_kategori'] = ($request->nama_kategori);

        $barang = Barang::findOrFail($id);
        $barang->update($data);

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dirubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);

        $barang->delete();

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
