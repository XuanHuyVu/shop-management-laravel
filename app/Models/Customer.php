<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'email'];
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
