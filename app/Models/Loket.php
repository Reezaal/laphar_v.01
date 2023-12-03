<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loket extends Model
{
    use HasFactory;

    protected $table = 'Lokets';

    protected $primaryKey = 'id_loket';

    protected $fillable = [
        'Tanggal',
        'Migrasi',
        'Multiguna',
        'PB',
        'PD',
    ];
}
