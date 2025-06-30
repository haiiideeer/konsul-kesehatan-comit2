<?php

// app/Models/Konsultasi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pasien',
        'email',
        'keluhan',
        'dokter',
        'tanggal',
        'user_id'
    ];
}

