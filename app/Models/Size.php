<?php
// Size.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
use HasFactory;
    protected $table = 'size';
protected $fillable = [
'product_id', 'width', 'profile', 'rim_size', 'speed'
];

public function product()
{
return $this->belongsTo(Product::class);
}
}