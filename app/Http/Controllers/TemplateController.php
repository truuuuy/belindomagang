<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\DetailKeranjang;
use App\Models\Wishlist;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::getProduct();
        $detail = DetailKeranjang::getDetailKeranjangs();
        $totalQuantity = $detail->sum('jumlah');
        $wishlistCount = Wishlist::where('user_id', auth()->id())->count();
        return view('app.landingpage.template', compact('data', 'detail', 'totalQuantity', 'wishlistCount'));
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
        // Retrieve the collection of DetailKeranjang models
        $details = DetailKeranjang::deleteDetailKeranjang($id);
        // dd($details);
        return redirect()->route('template.index');

    }
}
