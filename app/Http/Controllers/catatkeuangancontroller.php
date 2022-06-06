<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keuangan;

class catatkeuangancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuangan = keuangan::all();
        $no = 1;
        return view('admin.produk.catatkeuangan.index', compact('keuangan', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('admin.produk.catatkeuangan.create');
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
            'tanggal' => 'required|max:255',
            'jumlah_pemasukan' => 'required',
            'jumla_pengeluaran' => 'required',
        ]);
        $show = Keuangan::create($validatedData);
   
        return redirect('/keuangan')->with('success', 'Data sudah tersimpan');
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
        $keuangan = keuangan::findOrFail($id);

        return view('admin.produk.catatkeuangan.edit', compact('keuangan'));
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
        $validatedData = $request->validate([
            'tanggal' => 'required|max:255',
            'jumlah_pemasukan' => 'required',
            'jumlah_pengeluaran' => 'required',
        ]);
        keuangan::whereId($id)->update($validatedData);

        return redirect('/keuangan')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keuangan = keuangan::findOrFail($id);
        $keuangan->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
