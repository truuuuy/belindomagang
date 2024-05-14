<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlamatPengiriman extends Model
{
    use HasFactory;
    protected $table = 'alamat_pengirimans';
    protected $filllable = [
        'user_id',
        'alamat',
        'kota',
        'kode_pos',
        'no_telepon',
    ];

    public static function getAlamatPengirimans()
    {
        $query = DB::table('alamat_pengirimans')
            ->select(
                'alamat_pengirimans.id',
                'alamat_pengirimans.alamat',
                'alamat_pengirimans.kota',
                'alamat_pengirimans.kode_pos',
                'alamat_pengirimans.no_telepon',
                'users.name AS nama_user'
            )
            ->join('users', 'users.id', '=', 'alamat_pengirimans.user_id')
            ->get();
        return $query;
    }

    public static function addAlamatPengirimans($data)
    {
        return DB::insert('INSERT INTO alamat_pengirimans (user_id,alamat,kota,kode_pos,no_telepon, created_at) VALUES (?, ?, ?, ?, ?)', [
            $data['user_id'],
            $data['alamat'],
            $data['kota'],
            $data['kode_pos'],
            $data['no_telepon'],
            now(),
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
