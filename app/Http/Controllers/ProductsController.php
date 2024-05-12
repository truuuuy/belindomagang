<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::getProduct();
        // dd($data);
        return view('app.product.index_product', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Categories::getCategory();
        $datas = User::all();
        return view('app.product.add_product', compact('data','datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'kategori_id' => 'required|integer', 
            'user_id' => 'required|integer', 
        ]);
    
        $success = Products::addProduct($validation);
        dd($success);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('app.product.update_product');
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
