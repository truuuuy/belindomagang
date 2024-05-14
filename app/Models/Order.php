<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $filllable = [
        'user_id',
        'status_pemesanan',
        'tgl_pemesanan',
    ];

    public static function getProduct()
    {
        $query = DB::table('orders')
            ->select(
                'orders.id',
                'orders.status_pemesanan',
                'orders.tgl_pemesanan',
                'users.name AS nama_user'
            )
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->get();

        return $query;
    }

    public static function getOrderById($id)
    {
        $query = DB::table('orders')
            ->select(
                'orders.id',
                'orders.status_pemesanan',
                'orders.tgl_pemesanan',
                'users.name AS nama_user'
            )
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->where('orders.id', $id)
            ->first();

        return $query;
    }

    public static function addOrder($data)
    {
        return DB::insert('INSERT INTO orders (status_pemesanan, tgl_pemesanan,  user_id, created_at) VALUES (?, ?, ?, ?)', [
            $data['status_pemesanan'],
            $data['tgl_pemesanan'],
            $data['user_id'],
            now(),
        ]);
    }

    public static function updateProduct($id, $data)
    {
        // Ambil data produk yang akan diperbarui
        $product = Products::getProductById($id);


        // Query Update
        return DB::update('UPDATE products SET nama_produk = ?, deskripsi = ?, harga = ?, stok = ?, gambar_produk = ?, kategori_id = ?, user_id = ?, updated_at = ? WHERE id = ?', [
            $data['nama_produk'],
            $data['deskripsi'],
            $data['harga'],
            $data['stok'],
            $data['gambar_produk'] ?? null,
            $data['kategori_id'],
            $data['user_id'],
            now(),
            $id,
        ]);
    }


    public static function deleteProduct($id)
    {
        return DB::delete('DELETE FROM products WHERE id = ?', [$id]);
    }





    public function categories()
    {
        return $this->belongsTo(Categories::class, 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
