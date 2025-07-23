<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'alamat',
        'user_id', // 🟢 Tambahkan ini agar bisa di-assign secara massal
    ];
}
