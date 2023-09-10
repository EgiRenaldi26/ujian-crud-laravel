<?php

namespace App\Http\Controllers;

use App\Models\BarangM;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = BarangM::all();
       return view('master', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.mastercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'barcode' => 'required',
            'nama_barang' => 'required',  
            'jumlah_barang' => 'required',
            'harga' => 'required',
            'tanggal_masuk' => 'required',
        ]);

        BarangM::create($validatedData);

        return redirect()->route('barang.index')->with('success', 'Data peserta berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = BarangM::find($id);
        return view('edit.masteredit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = BarangM::findOrFail($id);

        $barang->update([
            'barcode' => $request->barcode,
            'nama_barang' => $request->nama_barang,  
            'jumlah_barang' => $request->jumlah_barang,
            'harga' => $request->harga,
            'tanggal_masuk' => $request->tanggal_masuk,

        ]);

        return redirect()->route('barang.index')->with('success', 'Data peserta berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = BarangM::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Data berhasil dihapus.');
    }
}
