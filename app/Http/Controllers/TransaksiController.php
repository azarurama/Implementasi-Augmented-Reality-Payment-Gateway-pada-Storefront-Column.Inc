<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(Request $request, string $id)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-gY7AhVMVX4wHZ-XwDvuiEOk9';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        // dd($id);
        $beli = DB::table("produks")->select("*")->where("nama_produk", $id)->get();
        // dd($convertInt);
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 18000,
            ),
            'item_details' => array(
                [
                    'id' => $beli[0]->kode_produk,
                    'price' => $beli[0]->harga,
                    'quantity' => 1,
                    'name' => $beli[0]->nama_produk
                ]
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('tester', ['snap_token' => $snapToken, 'kode_produk' => $id, 'beli' => $beli]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $transaksi = new transaksi();
        $transaksi->id_transaksi = $request->id_transaksi;
        $transaksi->userId = $request->userId;
        $transaksi->total_item = $request->total_item;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
