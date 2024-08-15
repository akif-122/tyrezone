<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TyrePattern extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'tyre_patterns';

    // The attributes that are mass assignable
    protected $fillable = [
        'name_of_manufacturer',
        'type_of_pattern',
    ];

    // If you want to disable the timestamps (created_at and updated_at columns)
    // public $timestamps = false;
}
