<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    

    // protected $table = "products";

    protected $fillable = [

        'name',
        'price',
        'description',

    ];

    use HasFactory;

    public function stocks()
    {
        return $this->hasMany(\App\Models\Stock::class);

    }
}
