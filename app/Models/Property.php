<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Property extends Model
{
    protected $table = 'property';
    protected $fillable=[
        'id',
        'user_id',
        'cate_id',
        'discription',
        'province',
        'district',
        'postal_code',
        'city',
        'ward_no',
        'tole',
        'street_no',
        'road_type',
        'road_length',
        'direction_faced',
        'area',
        'structure_area',
        'room_no',
        'stories_no',
        'structure_age',
        'hypertension',
        'river_side',
        'water_supply',
        'darinage',
        'electricity',
        'p_trasnport',    
        'image',
        'selling_rate',
        'verification'
    ];

    public function catagory()
    {
        return $this-> belongsTo(catagory::class, 'cate_id', 'id');
    }

    public function user()
    {
        return $this-> belongsTo(user::class, 'user_id', 'id');
    }

     public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function imgs()
    {
        return $this->belongsTo(Property::class, 'id', 'property_id');
    }

}
