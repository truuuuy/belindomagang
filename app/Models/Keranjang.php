<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjangs';
    protected $filllable = [
        'user_id',
    ];

    public static function getKeranjang()
    {
        $query = DB::table('keranjangs')
            ->select(
                'keranjangs.id',
                'users.name AS nama_user'
            )
            ->join('users', 'users.id', '=', 'keranjangs.user_id')
            ->get();
        return $query;
    }

    public static function addKeranjang($data)
    {
        return DB::insert('INSERT INTO keranjangs (user_id, created_at) VALUES (?, ?)', [
            $data['user_id'],
            now(),
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
