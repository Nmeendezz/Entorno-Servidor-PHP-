<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ["id", "date"];
    
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function clients(){
        return $this->hasMany(Client::class);
    }
}