<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'manufacturers';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'image',
        'excerpt',
        'description',
    ];

    // If you want to define relationships, accessors, or other model methods, you can do so here
}
