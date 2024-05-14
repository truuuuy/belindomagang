<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailOrder extends Model
{
    use HasFactory;
    protected $table = 'detail_orders';
    protected $filllable = [
        'order_id',
        'product_id',
        'jumlah',
        'harga_satuan',
    ];

    public static function getDetailOrder()
    {
        $query = DB::table('detail_orders')
            ->select(
                'detail_orders.id',
                'detail_orders.jumlah',
                'detail_orders.harga_satuan',
                'orders.tgl_pemesanan',
                'products.nama_produk.'

            )
            ->join('orders', 'orders.id', '=', 'detail_orders.order_id')
            ->join('products', 'products.id', '=', 'detail_orders.product_id')
            ->get();

        return $query;
    }

    public static function addDetailOrder($data)
    {
        return DB::insert('INSERT INTO detail_orders (jumlah, harga_satuan, order_id, product_id, created_at) VALUES (?, ?, ?, ?, ?)', [
            $data['jumlah'],
            $data['harga_satuan'],
            $data['order_id'],
            $data['product_id'],
            now(),
        ]);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
