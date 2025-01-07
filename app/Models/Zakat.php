<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    use HasFactory;

    protected $table = 'zakat';

    protected $fillable = [
        'nama',
        'penghasilan',
        'thr_bonus',
        'utang',
        'cicilan',
        'zakat',
        'is_paid'
    ];
    
}
