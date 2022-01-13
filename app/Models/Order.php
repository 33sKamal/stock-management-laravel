<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'address',
        'phone',
        'method_payment',
        'status',
        'total',
        'sub_total',
    ];


    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class,'order_products','order_id','product_id')->withPivot('price','qty');

    }

    
}
