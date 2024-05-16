<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\DetailKeranjang;
use App\Models\Products;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(Request $request, $id)
    {
        // Ambil produk berdasarkan ID
        $produk = Products::find($id);

        // Pastikan produk ditemukan
        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        // Periksa apakah stok cukup untuk menambahkan ke keranjang
        if ($produk->stok <= 0) {
            return response()->json(['message' => 'Stok produk habis, tidak bisa ditambahkan ke keranjang'], 400);
        }

        // Cek apakah jumlah yang diminta melebihi stok yang tersedia
        if ($request->jumlah > $produk->stok) {
            return response()->json(['message' => 'Jumlah produk melebihi stok yang tersedia'], 400);
        }

        // Buat keranjang atau temukan keranjang pengguna yang ada
        $keranjang = Keranjang::firstOrCreate(['user_id' => $request->user_id]);

        // Buat detail keranjang baru
        $detailKeranjang = new DetailKeranjang();
        $detailKeranjang->jumlah = $request->jumlah;

        // Tetapkan product_id ke detail keranjang
        $detailKeranjang->product_id = $produk->id;

        // Simpan detail keranjang
        $keranjang->detailKeranjangs()->save($detailKeranjang); // Menggunakan relasi

        // Kurangi stok produk
        $produk->stok -= $request->jumlah;
        $produk->save();

        return response()->json(['message' => 'Item berhasil ditambahkan ke keranjang'], 200);
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
