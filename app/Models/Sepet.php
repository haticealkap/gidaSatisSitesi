<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
    use HasFactory;
    public function get_products(){
        return $this->hasMany(Product::class,'id','product_id');
    }
}
