<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'surname'       => 'A1',
            'name'          => 'B1',
            'patronymic'    => 'C1',
            'sex'           => 1,
            'birthday'      => '2000-01-01',
            'email'         => 'email1@example.com',
            'phone'         => '321878128478435873489',
            'nickname'      => 'Admin',
            'password'      => 'Pass123!',
            'api_token'     => '1',
            'role_id'       => Role::firstOrCreate(['code' => 'admin'])->id,
        ]);
        User::create([
            'surname'       => 'A2',
            'name'          => 'B2',
            'patronymic'    => 'C2',
            'sex'           => 0,
            'birthday'      => '2000-01-01',
            'email'         => 'email2@example.com',
            'phone'         => '321878128478435873488',
            'nickname'      => 'Manager',
            'password'      => 'Pass123!',
            'api_token'     => '2',
            'role_id'       => Role::firstOrCreate(['code' => 'manager'])->id,
        ]);
        User::create([
            'surname'       => 'A3',
            'name'          => 'B3',
            'patronymic'    => 'C3',
            'sex'           => 1,
            'birthday'      => '2000-01-01',
            'email'         => 'email3@example.com',
            'phone'         => '321878128478435873487',
            'nickname'      => 'User',
            'password'      => 'Pass123!',
            'api_token'     => '3',
            'role_id'       => Role::firstOrCreate(['code' => 'user'])->id,
        ]);
    }
}
