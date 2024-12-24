<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    public $timestamps = false;
    protected $fillable = ['order_id', 'product_id', 'quantity'];
}
