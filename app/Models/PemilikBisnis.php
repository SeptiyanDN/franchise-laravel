<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PemilikBisnis extends Model
{
    use HasFactory;
    use Sortable;

    public $sortable = [
        'nomor_pemilik_bisnis', 'nama_lengkap', 'alamat'
    ];
}
