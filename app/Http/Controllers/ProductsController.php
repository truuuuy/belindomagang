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
        $title = 'Delete Product!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
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
        // dd($success);
        if ($success) {
            alert()->success('Success', 'Data berhasil disimpan');
            return redirect()->route('product.index');
        }else{
            alert()->error('Error', 'Data gagal disimpan');
            return redirect()->route('product.create');
        }
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
        $data = Products::getProductById($id);
        $categories = Categories::getCategory();
        $users = User::all();
        // dd($data);
        return view('app.product.update_product', compact('data', 'categories', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'kategori_id' => 'required|integer', 
            'user_id' => 'required|integer', 
        ]);

        $data = $request->all();
        $updated = Products::updateProduct($id, $data);
        // dd($updated);
        if ($updated) {
            alert()->success('success', 'Data berhasil di update');
            return redirect()->route('product.index');
        }else{
            alert()->error('error', 'Data gagal di update');
            return response()->json('gagal terupdate', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Products::deleteProduct($id);

        if ($deleted) {
            return redirect()->route('product.index')->with('success', 'Product berhasil dihapus.');
        } else {
            return back()->with('error', 'Gagal menghapus Product. Silakan coba lagi.');
        }
    }
}
