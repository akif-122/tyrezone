<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class users extends Model
{

    protected $table = 'users';
    protected $fillable = [
        'f_name',
        'last_name',
        'email',
        'phone',
        'password',
        'company_name',
        'country',
        'city',
        'address',
        'postcode',
        'company_phone',
    ];
}
