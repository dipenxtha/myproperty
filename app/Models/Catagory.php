<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;


    protected $table = 'catagories';
    protected $fillable = [
        'type',
        'discription',
        'area',
        'status',
        'popular',
        'image',
        'location',
        'meta_title',
        'meta_discription',
        'meta_keywords'
    ];
}
