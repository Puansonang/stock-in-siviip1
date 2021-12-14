<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.barangmasuk.list",[
            "barangmasuk" => BarangMasuk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.barangmasuk.form");
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
            "tanggal" => "required",
            "produk_id" => "required",
        ]);

        BarangMasuk::create([
            "tanggal" => $request->tanggal,
            "produk_id" => $request->produk_id,
        ]);

        return redirect()
            ->route("barangmasuk.index")
            ->with("info","Berhasil Tambah Kelompok");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangMasuk $barangMasuk)
    {
        return view('pages.barangmasuk.form',[
            "barangmasuk" => $barangMasuk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangMasuk $barangMasuk)
    {
        $barangMasuk->update([
            "tanggal" => $request->tanggal,
            "produk_id" => $request->produk_id

        ]);

        return redirect()
                ->route("barangmasuk.index")
                ->with("info","Berhasil Update Kelompok");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangMasuk $barangMasuk)
    {
        $barangMasuk->delete();

        return redirect()
            ->route("barangmasuk.index")
            ->with("info","Berhasil Hapus Kelompok");
    }
}
