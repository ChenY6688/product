<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['order_id', 'user_id', 'name', 'address', 'date', 'phone', 'menu', 'total', 'pay', 'status'];

    public function  productoder()
    {
        // hasOne(關聯/對方的欄位/自己的欄位)
        return $this->hasMany(Productoder::class, 'form_id', 'id');
    }
}
