<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ongkir;

class ongkircontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ongkir = Ongkir::all();
        $no = 1;
        return view('admin.produk.ongkir.index', compact('ongkir', 'no'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.ongkir.create');
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
        $show = Ongkir::create($data);
   
        return redirect('/ongkir')->with('success', 'Data sudah tersimpan');
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
        $ongkir = Ongkir::findOrFail($id);

        return view('admin.produk.ongkir.edit', compact('ongkir'));
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
            'nama_order' => 'required|max:255',
            'tanggal' => 'required',
            'berat' => 'required',
            'kurir' => 'required',
            'status' => 'required',
        ]);
        $ongkir = ongkir::find($id);
        $ongkir->nama_order = $request->nama_order;
        $ongkir->tanggal = $request->tanggal;
        $ongkir->berat = $request->berat;
        $ongkir->kurir = $request->kurir;
        $ongkir->status = $request->status;
        $ongkir->save();
        ongkir::whereId($id)->update($validatedData);

        return redirect('/ongkir')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ongkir = Ongkir::findOrFail($id);
        $ongkir->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
