<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public $fillable = ['title', 'address', 'city', 'zipcode',
        'description', 'price', 'bedrooms', 'has_store', 'has_garage',
        'sqft', 'is_published', 'image', 'image_1', 'image_2', 'image_3',
        'image_4', 'image_5', 'image_6'
    ];
}
