<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categories::getCategory();
        $title = 'Delete Category!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('app.kategori.index_kategori', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.kategori.kategori_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data request
        $validatedData = $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        // Membuat entri baru dalam tabel produk menggunakan model
        $success = Categories::addCategory($validatedData);

        if ($success) {
            // Redirect ke halaman atau tindakan selanjutnya jika berhasil
            alert()->success('Success','Category berhasil di inputkan');
            return redirect()->route('category.index');
        } else {
            // Redirect kembali dengan pesan kesalahan jika gagal
            return back()->withInput()->with('error', 'Failed to create product.');
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
        $data = Categories::getCategoryById($id);
        // dd($data);
        return view('app.kategori.kategori_update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validasi request data jika diperlukan
         $request->validate([
            'nama_kategori' => 'required|string|max:255', 
        ]);

        $data = $request->only('nama_kategori');

        // Memanggil metode updateCategory dari model Category
        $updated = Categories::updateCategory($id,$data);

        if ($updated) {
            alert()->success('Success', 'Data berhasil di update');
            return redirect()->route('category.index');
        } else {
            return back()->with('error', 'Gagal memperbarui kategori. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Categories::deleteCategory($id);

        if ($deleted) {
            return redirect()->route('category.index')->with('success', 'Kategori berhasil dihapus.');
        } else {
            return back()->with('error', 'Gagal menghapus kategori. Silakan coba lagi.');
        }
    }
}
