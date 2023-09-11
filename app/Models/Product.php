<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'img_path', 'price', 'status', 'desc'];

    public function cart(){
        return $this->hasMany(Cart::class,'product_id','id');
    }
}
