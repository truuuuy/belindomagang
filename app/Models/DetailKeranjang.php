<?php

namespace App\Models;

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
                'keranjangs.keranjang_id',
                'products.nama_produk.'

            )
            ->join('keranjang', 'keranjang.id', '=', 'detail_keranjangs.order_id')
            ->join('products', 'products.id', '=', 'detail_keranjangs.product_id')
            ->get();

        return $query;
    }


}
