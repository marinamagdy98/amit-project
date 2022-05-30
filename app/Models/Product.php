<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_price',
        'product_category',
        'product_photo',
    ];

    public function categories(){
        return $this->hasMany(Product::class,'category_name','id');
    }
}
