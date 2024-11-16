<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderStatus::firstOrCreate(['code' => 'new']);
        OrderStatus::firstOrCreate(['code' => 'inAssembly']);
        OrderStatus::firstOrCreate(['code' => 'inTransfer']);
        OrderStatus::firstOrCreate(['code' => 'onWay']);
        OrderStatus::firstOrCreate(['code' => 'delivered']);
        OrderStatus::firstOrCreate(['code' => 'cancelled']);
        OrderStatus::firstOrCreate(['code' => 'received']);
    }
}
