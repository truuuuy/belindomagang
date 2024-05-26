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
        $keranjang = Keranjang::get();
        return view('app.landingpage.template', compact('keranjang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Implementasi untuk menampilkan form pembuatan keranjang (opsional)
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

        // Cek apakah jumlah yang diminta melebihi stok yang tersedia
        if ($request->jumlah > $produk->stok) {
            return response()->json(['message' => 'Jumlah produk melebihi stok yang tersedia'], 400);
        }

        // Buat keranjang atau temukan keranjang pengguna yang ada
        $keranjang = Keranjang::firstOrCreate(['user_id' => $request->user()->id]);

        // Buat detail keranjang baru
        $detailKeranjang = new DetailKeranjang();
        $detailKeranjang->jumlah = $request->jumlah;
        $detailKeranjang->product_id = $produk->id;

        // Simpan detail keranjang
        $keranjang->detailKeranjangs()->save($detailKeranjang);

        return response()->json(['message' => 'Item berhasil ditambahkan ke keranjang'], 200);
    }

    /**
     * Display the cart items.
     */
    public function showCart()
    {
        // Ambil keranjang pengguna yang sedang login
        $keranjang = Keranjang::where('user_id', auth()->id())->with('detailKeranjangs.product')->first();

        // Jika keranjang tidak ditemukan, kembalikan respon kosong
        if (!$keranjang) {
            return response()->json(['cart' => [], 'total' => 0]);
        }

        // Hitung total harga
        $total = $keranjang->detailKeranjangs->sum(function ($detail) {
            return $detail->jumlah * $detail->product->price;
        });

        return response()->json(['cart' => $keranjang->detailKeranjangs, 'total' => $total]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implementasi untuk menampilkan detail keranjang (opsional)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Implementasi untuk menampilkan form pengeditan keranjang (opsional)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implementasi untuk memperbarui keranjang (opsional)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the detail keranjang by ID
        $data = DetailKeranjang::find($id);

        // Check if the item is found
        if (!$data) {
            return response()->json(['message' => 'Item tidak ditemukan'], 404);
        }

        // Delete the item
        $data->delete();

        // Return a JSON response indicating success
        return response()->json(['message' => 'Keranjang berhasil dihapus'], 200);
    }
}
