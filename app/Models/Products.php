<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $table = 'Products';
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'stok',
        'gambar_produk',
        'kategori_id',
        'user_id',
    ];

    public static function getProducts()
    {
        return DB::table('products')->get();
    }

    public static function addProducts($data)
    {
        return DB::insert('INSERT INTO categories (nama_kategori, created_at) VALUES (?,?)', [
            $data['products'],
            now(),
        ]);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
