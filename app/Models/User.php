<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'sex',
        'birthday',
        'email',
        'phone',
        'nickname',
        'password',
        'avatar',
        'role_id',
        'api_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'api_token',
    ];

    protected function casts(): array
    {
        return [
            'sex' => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }
    public function addresses() {
        return $this->hasMany(Address::class);
    }
    public function orders() {
        return $this->hasMany(Order::class);
    }
    public function orderedProducts() {
        return $this->belongsToMany(Product::class, Order::class);
    }
    public function cartsItems() {
        return $this->hasMany(CartItem::class);
    }
    public function productsInCart() {
        return $this->belongsToMany(Product::class, CartItem::class);
    }
}
