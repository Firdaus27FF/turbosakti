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
        return view('admin.produk.pelanggan.index', compact('datapelanggan'));
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
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ]);

        $data = $request->all();
        // dd($data);
        $datas = DetailPelanggan::create($data);

        return redirect()->route('pelanggan.index')->with('success','Input Data Customers Berhasil');

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
        $pelanggan = DetailPelanggan::findOrFail($id);
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
            'nama'          => 'required|unique:detail_pelanggan,nama,'.$id,
            'alamat'        => 'required',
            'no_tlp'        => 'required|unique:detail_pelanggan,no_tlp,'.$id,
        ]);
        $pelanggan = DetailPelanggan::findOrFail($id);
        $data     = $request->all();

        $pelanggan->update($data);

        return redirect()->route('pelanggan.index')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = DetailPelanggan::findOrFail($id)->delete();

        return redirect()->route('pelanggan.index')->with('delete','Data Pelanggan Berhasil Dihapus');

    }
}
