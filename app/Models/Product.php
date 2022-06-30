<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $casts = ['size' => 'array'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function carts()
    {
        $this->belongsToMany(Cart::class);
    }
}
