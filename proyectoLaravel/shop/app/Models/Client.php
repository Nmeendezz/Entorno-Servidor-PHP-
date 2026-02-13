<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ["id", "name", "surname", "address"];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
