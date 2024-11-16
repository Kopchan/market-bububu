<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'discount',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function images() {
        return $this->hasMany(Photo::class);
    }
    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
    public function inOrders() {
        return $this->belongsToMany(Order::class, OrderItem::class)
            ->using(OrderItem::class);
    }
    public function cartItems() {
        return $this->hasMany(CartItem::class);
    }
    public function inUserCarts() {
        return $this->belongsToMany(User::class, CartItem::class);
    }
}
