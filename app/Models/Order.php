<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function images(){
        return $this->hasMany(Image::class,"order_id","id");
    }
    public function prices(){
        return $this->hasMany(Price::class,"order_id","id");
    }
}
