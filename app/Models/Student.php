<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap', 'gender', 'tempat_lahir', 'tanggal_lahir',
        'gambar', 'sertifikat', 'cv'
    ];
}
