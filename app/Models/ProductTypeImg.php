<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypeImg extends Model
{
    use HasFactory;

    protected $table = 'product_type_imgs';

    protected $fillable = ['img_path', 'product_type_id'];

    public function productType()
    {
        // hasOne (一對一)(關聯,對方的欄位,自己的欄位): 我有子表 並且是一對一
        // belongsTo (一對一)(關聯,自己的欄位,對方的欄位): 自身身上記錄著他表的id
        return $this->belongsTo(ProductType::class, 'product_type_id', 'id');
    }
}
