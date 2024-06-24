<?php

namespace App\Http\Controllers;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        // dd($produk);
        return view('admin.produk', compact('produk'));
    }

    public function allProduk() {
        $produks = Produk::all();
        // foreach ($produks as $produk) {
        //     dump($produk->kode_produk);
        // }

        return view('produk', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('sasa');
        $produk = new Produk();
        $produk->kode_produk = $request->kode_produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->foto_produk = $request->file('foto_produk')->store('produk', 'public');
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        $produk = DB::table('produks')->select('*')->where('nama_produk', $id)->get();
        // dd($produk);
        return view('detail_produk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
