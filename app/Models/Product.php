<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function taxCharge(){
        return $this->hasOne(TaxCharge::class,"id","taxCharge_id");
    }

    public function typeProduct(){
        return $this->hasOne(typeProduct::class,"id","typeProduct_id");
    }

    public function images(){
        return $this->hasMany(ProductImage::class,"product_id","id");
    }
}
