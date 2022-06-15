<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasOne(Product::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function clientOrders()
    {
        return $this->belongsTo(ClientOrder::class);
    }
}
