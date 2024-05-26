<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailKeranjang extends Model
{
    use HasFactory;
    protected $table = 'detail_keranjangs';
    protected $filllable = [
        'keranjang_id',
        'product_id',
        'jumlah',
    ];

    public static function getDetailKeranjangs()
    {
        $query = DB::table('detail_keranjangs')
            ->select(
                'detail_keranjangs.id',
                'detail_keranjangs.jumlah',
                'keranjangs.id AS keranjang_id',
                'products.nama_produk',
                'products.gambar_produk',
                'products.harga',
            )
            ->join('keranjangs', 'keranjangs.id', '=', 'detail_keranjangs.keranjang_id')
            ->join('products', 'products.id', '=', 'detail_keranjangs.product_id')
            ->get();

        return $query;
    }

    public static function getDetailById($keranjangId)
    {
        return DB::table('detail_keranjangs')
            ->select(
                'detail_keranjangs.id',
                'detail_keranjangs.jumlah',
                'keranjangs.id AS keranjang_id',
                'products.nama_produk',
                'products.gambar_produk',
                'products.harga'
            )
            ->join('keranjangs', 'keranjangs.id', '=', 'detail_keranjangs.keranjang_id')
            ->join('products', 'products.id', '=', 'detail_keranjangs.product_id')
            ->where('keranjangs.id', $keranjangId)
            ->get();
    }

    public static function deleteDetailKeranjang($id)
    {
        return DB::delete('DELETE FROM detail_keranjangs WHERE id = ?', [$id]);
    }


    public function produk()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
