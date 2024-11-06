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
            'password' => 'hashed',
        ];
    }

    protected function role() {
        return $this->belongsTo(Role::class);
    }
}
