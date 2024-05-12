<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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

    public static function getProduct()
    {
        $query = DB::table('products')
            ->select(
                'products.nama_produk',
                'products.deskripsi',
                'products.harga',
                'products.stok',
                'products.gambar_produk',
                'categories.nama_kategori',
                'users.name AS nama_user'
            )
            ->join('categories', 'categories.id', '=', 'products.kategori_id')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->get();

        return $query;
    }

    public static function addProduct($data)
    {
        // Proses gambar jika ada
        if (isset($data['gambar_produk'])) {
            $data['gambar_produk'] = self::storeImage($data['gambar_produk']);
        }else {
            // Jika tidak ada gambar diunggah, atur nilai gambar_produk menjadi null
            $data['gambar_produk'] = null;
        }
        return DB::insert('INSERT INTO products (nama_produk, deskripsi, harga, stok, gambar_produk, kategori_id, user_id, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)', [
            $data['nama_produk'],
            $data['deskripsi'],
            $data['harga'],
            $data['stok'],
            $data['gambar_produk'] ?? null,
            $data['kategori_id'],
            $data['user_id'],
            now(),
        ]);
    }

    private static function storeImage($image)
    {
        $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension(); // Membuat nama unik untuk gambar

        // Simpan gambar ke penyimpanan yang diinginkan
        Storage::putFileAs('public/produk', $image, $imageName);

        return $imageName;
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
