<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function sizes()
    {
        return $this->hasOne(Size::class);
    }

    public function brands()
    {
        return $this->hasOne(Brand::class);
    }

    public function categories()
    {
        return $this->hasOne(Category::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
