<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
   protected $fillable = [ 'customer_id', 'order_date', 'status'];
   public function customer()
   {
       return $this->belongsTo(Customer::class);
   }
}
