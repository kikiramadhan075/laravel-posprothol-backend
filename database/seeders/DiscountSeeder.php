<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Discount::create([
            'name' => 'New Year Dicount',
            'description' => 'New Year Dicount',
            'type' => 'percentage',
            'value' => 10,
            'status' => 'active',
            'expired_date' => '2024-12-01'
        ]);
        \App\Models\Discount::create([
            'name' => 'New Member Dicount',
            'description' => 'New Member Dicount',
            'type' => 'percentage',
            'value' => 25,
            'status' => 'active',
            'expired_date' => '2024-11-30'
        ]);
        \App\Models\Discount::create([
            'name' => 'Weekend Discount',
            'description' => 'Weekend Dicount',
            'type' => 'percentage',
            'value' => 10,
            'status' => 'active',
            'expired_date' => '2024-11-27'
        ]);

    }
}
