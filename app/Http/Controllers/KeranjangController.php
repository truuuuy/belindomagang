<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Wishlist;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\DetailKeranjang;

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
        $product = Products::find($id);

        // Pastikan produk ditemukan
        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        // Cek apakah jumlah yang diminta melebihi stok yang tersedia
        if ($request->jumlah > $product->stok) {
            return response()->json(['message' => 'Jumlah produk melebihi stok yang tersedia'], 400);
        }

        // Buat keranjang atau temukan keranjang pengguna yang ada
        $cart = Keranjang::firstOrCreate(['user_id' => $request->user()->id]);

        // Cek apakah produk sudah ada dalam detail keranjang
        $detailKeranjang = DetailKeranjang::where('keranjang_id', $cart->id)
            ->where('product_id', $product->id)
            ->first();

        if ($detailKeranjang) {
            // Update jumlah jika produk sudah ada di keranjang
            $newJumlah = $detailKeranjang->jumlah + $request->jumlah;

            // Pastikan jumlah baru tidak melebihi stok yang tersedia
            if ($newJumlah > $product->stok) {
                return response()->json(['message' => 'Jumlah produk melebihi stok yang tersedia'], 400);
            }

            $detailKeranjang->jumlah = $newJumlah;
            $detailKeranjang->save();
        } else {
            // Buat detail keranjang baru jika produk belum ada di keranjang
            $detailKeranjang = new DetailKeranjang();
            $detailKeranjang->jumlah = $request->jumlah;
            $detailKeranjang->product_id = $product->id;
            $cart->detailKeranjangs()->save($detailKeranjang);
        }

        // Cek jika whilist mendapatkan request
        if ($request->has('wishlist') && $request->wishlist == 'true') {
            $wishlist = Wishlist::firstOrCreate([
                'user_id' => $request->user()->id,
                'product_id' => $product->id,
            ]);
            // dd($wishlist);
        }

        return redirect()->route('template.index');
    }



    /**
     * Display the cart items.
     */
    public function showCart()
    {
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
        $data = Keranjang::find($id);

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
