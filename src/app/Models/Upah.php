<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upah extends Model
{
    protected $fillable = [
        'karyawan_id',  // ✅ ubah ini (sebelumnya salah: 'karyawans_id')
        'bulan',
        'tahun',
        'gaji_pokok',
        'tunjangan',
        'potongan',
        'total_gaji',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}

