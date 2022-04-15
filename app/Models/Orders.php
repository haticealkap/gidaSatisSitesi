<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
class Orders extends Model
{
    use HasFactory;
    
    public function get_products(){
        return $this->hasMany(Product::class,'id','product_id');
    }
    public function get_user(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
