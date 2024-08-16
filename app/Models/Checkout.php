<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the plural form of the model name
    protected $table = 'checkouts';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'telephone',
        'reg_no',
        'post_code',
        'company',
        'address',
        'city',
        'country',
        'comments',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class, 'checkout_id');
    }
}
