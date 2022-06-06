<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;

class jenisprodukcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produk = jenisProduk::all();
        return view('admin.produk.jenisproduk.index', compact('produk'));
    }

    public function create(Request $request)
    {
        // $produk['jenis'] = 'Tambah User';
        // $produk['jenis'] = ['admin' => 'Admin', 'jenis' => 'jenis'];
        return view('admin.produk.jenisproduk.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate([
            'rasa' => 'required|max:255',
            'harga_jual' => 'required',
            'foto'  => 'required|max:255',
        ]);
        $data = $request->all();
        $show = JenisProduk::create($data);
   
        return redirect('/jenis')->with('success', 'Data sudah tersimpan');
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
        $produk = JenisProduk::findOrFail($id);

        return view('admin.produk.jenisproduk.edit', compact('produk'));
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
            'gambar' => 'required',
            'rasa' => 'required|max:255',
            'harga_jual' => 'required',
        ]);
        $produk = produk::find($id);
        $produk->gambar = $request->gambar;
        $produk->rasa = $request->rasa;
        $produk->harga_jual = $request->harga_jual;
        $produk->save();
        jenisproduk::whereId($id)->update($validatedData);

        return redirect('/jenis')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = JenisProduk::findOrFail($id);
        $produk->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
