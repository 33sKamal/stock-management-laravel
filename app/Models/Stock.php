<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'secteur',
        'case',
        'qty',
        'product_id',
    ];


    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id', 'id', 'products');
    }
}
