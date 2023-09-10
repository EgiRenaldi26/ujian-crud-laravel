<?php

namespace App\Http\Controllers;

use App\Models\DaftarpkkM;
use Illuminate\Http\Request;

class DaftarpkkR extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarpkk = DaftarpkkM::all();
       return view('daftarpkk', compact('daftarpkk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.daftarpkkcreate');
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
            'nama_guru' => 'required',
            'kelas' => 'required',
            
        ]);
        DaftarpkkM::create($validatedData);

        return redirect()->route('daftarpkk.index')->with('success', 'Data peserta berhasil ditambahkan.');
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
        $daftarpkk = DaftarpkkM::find($id);
        return view('edit.daftarpkkedit', compact('daftarpkk'));
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
        $daftarpkk = DaftarpkkM::findOrFail($id);

        $daftarpkk->update([
            'nama_guru' => $request->nama_guru,
            'kelas' => $request->kelas,  
           
        ]);

        return redirect()->route('daftarpkk.index')->with('success', 'Data peserta berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarpkk = DaftarpkkM::findOrFail($id);
        $daftarpkk->delete();

        return redirect()->route('daftarpkk.index')->with('success', 'Data berhasil dihapus.');
    }
}
