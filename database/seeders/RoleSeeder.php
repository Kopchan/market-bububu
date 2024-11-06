<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['code' => 'user']);
        Role::create(['code' => 'manager']);
        Role::create(['code' => 'admin']);
    }
}
