<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity'];
}
