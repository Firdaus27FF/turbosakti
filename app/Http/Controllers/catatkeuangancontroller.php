<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;

class catatkeuangancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuangan = Keuangan::all();
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
        $data = $request->all();
        Keuangan::create($data);
   
        return redirect('/catatkeuangan')->with('success', 'Data sudah tersimpan');
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
        $catatkeuangan = Keuangan::findOrFail($id);

        return view('admin.produk.catatkeuangan.edit', compact('catatkeuangan'));
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
        $this->validate($request,[
            'tanggal' => 'required',
            'jumlah_pemasukan' => 'required',
            'jumlah_pengeluaran' => 'required',
        ]);
        $catatkeuangan = Keuangan::findOrFail($id);

        $catatkeuangan->update([
            'tanggal'               => $request->tanggal,
            'jumlah_pemasukan'      => $request->jumlah_pemasukan,
            'jumlah_pengeluaran'    => $request->jumlah_pengeluaran
        ]);

        return redirect()->route('catatkeuangan.index')->with('success', 'Data selesai di update');
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
