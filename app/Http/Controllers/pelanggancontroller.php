<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPelanggan;

class pelanggancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapelanggan = DetailPelanggan::all();
        $no = 1;
        return view('admin.produk.pelanggan.index', compact('datapelanggan', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.pelanggan.create');
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
        DetailPelanggan::create($data);
   
        return redirect('/pelanggan')->with('success', 'Data sudah tersimpan');
    }

    /**
     * Display the specified resourc)e.
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
        $pelanggan = detailpelanggan::findOrFail($id);

        return view('admin.produk.pelanggan.edit', compact('pelanggan'));
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
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        pelanggan::whereId($id)->update($validatedData);

        return redirect('/pelanggan')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = detailpelanggan::findOrFail($id);
        $pelanggan->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
