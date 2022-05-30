<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenisproduk;

class jenisprodukcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = jenisproduk::all();
        $no = 1;
        return view('admin.produk.jenisproduk.index', compact('produk', 'no'));
    }

    public function create()
    {
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
        $validatedData = $request->validate([
            'rasa' => 'required|max:255',
            'harga_jual' => 'required',
        ]);
        $show = JenisProduk::create($validatedData);
   
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
        $produk = jenisproduk::findOrFail($id);

        return view('edit', compact('produk'));
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
            'rasa' => 'required|max:255',
            'harga_jual' => 'required'
        ]);
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
        $produk = jenisproduk::findOrFail($id);
        $produk->delete();

        return redirect('/produk')->with('success', 'Data sudah di hapus');
    }
}
