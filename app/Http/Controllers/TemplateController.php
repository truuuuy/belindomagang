<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\DetailKeranjang;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Products::first();

        $data = Products::getProduct();
        $jumlah_item = DetailKeranjang::join('keranjangs', 'detail_keranjangs.keranjang_id', '=', 'keranjangs.id')
            ->where('keranjangs.user_id', auth()->user()->id)
            ->sum('jumlah');

        $total_harga = DetailKeranjang::join('products', 'detail_keranjangs.product_id', '=', 'products.id')
            ->join('keranjangs', 'detail_keranjangs.keranjang_id', '=', 'keranjangs.id')
            ->where('keranjangs.user_id', auth()->user()->id)
            ->sum(DB::raw('products.harga * detail_keranjangs.jumlah'));


        return view('app.landingpage.template', compact('data', 'jumlah_item', 'total_harga', 'produk'));
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
