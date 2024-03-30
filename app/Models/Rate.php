<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table = 'rate';
    protected $fillable = [
        'province',
        'district',
        'postal_code',
        'city',
        'ward_no',
        'tole',
        'street_no',
        'exact_rate',
        'max_rate',
        'min_rate'
    ];
}
