<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrediksiPenjualan;

class prediksipenjualancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prediksipenjualan = PrediksiPenjualan::all();
        $no = 1;
        return view('admin.produk.prediksipenjualan.index', compact('prediksipenjualan', 'no'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.prediksipenjualan.create');
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
            'jadwal' => 'required|max:25',
            'hasil_jumlah_produk' => 'required',
            'hasil_bersih' => 'required',
        ]);
        $show = prediksipenjualan::create($validatedData);
   
        return redirect('/prediksipenjualan')->with('success', 'Data sudah tersimpan');
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
        $prediksipenjualan = PrediksiPenjualan::findOrFail($id);

        return view('admin.produk.prediksipenjualan.edit', compact('prediksipenjualan'));
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
            'jadwal' => 'required|max:25',
            'hasil_jumlah_produk' => 'required',
            'hasil_bersih' => 'required',
        ]);
        prediksipenjualan::whereId($id)->update($validatedData);

        return redirect('/prediksipenjualan')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prediksipenjualan = PrediksiPenjualan::findOrFail($id);
        $prediksipenjualan->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
