<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the plural form of the model name
    protected $table = 'orders';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'checkout_id',
        'price',
        'season',
        'manufacturer_name',
        'size',
        'image',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function checkout()
    {
        return $this->belongsTo(Checkout::class, 'checkout_id');
    }
}
