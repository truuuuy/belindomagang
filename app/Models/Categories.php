<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable =
    [
        'nama_kategori',
    ];

    public static function getCategory()
    {
        return DB::table('categories')->get();
    }

    public static function addCategory($data)
    {
        return DB::insert('INSERT INTO categories (nama_kategori, created_at) VALUES (?,?)', [
            $data['nama_kategori'],
            now(),
        ]);
    }

    public static function getCategoryById($id)
    {
        $result = DB::select('SELECT * FROM categories WHERE id = ?', [$id]);

        if (!empty($result)) {
            return $result[0];
        } else {
            return null;
        }
    }


    public static function updateCategory($id)
    {
        return DB::delete('DELETE FROM categories WHERE id = ?', [$id]);
    }

    public static function deleteCategory($id)
    {
        return DB::delete('DELETE FROM categories WHERE id = ?', [$id]);
    }





    public function produk()
    {
        return $this->hasMany(Products::class);
    }
}
