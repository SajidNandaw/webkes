<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters'; // sesuai nama tabel
    protected $fillable = ['nama', 'spesialis', 'jadwal', 'foto'];
}
