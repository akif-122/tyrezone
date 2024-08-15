<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Specify the table if it's not following Laravel's convention
    protected $table = 'products';

    // Specify the fillable attributes
    protected $fillable = [
        'name',
        'manufacturer_name',
        'tyre_pattern',
        'fuel_efficiency',
        'wet_grip',
        'road_noise',
        'size',
        'tyre_type',
        'season',
        'price',
        'budget_tyres',
        'image'
    ];
    
}
