<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            ['CompanyName' => 'COCA', 'Address' => 'Address 1', 'ContactNumber' => '1234567890', 'Email' => 'COCA@example.com'],
            ['CompanyName' => 'PESI', 'Address' => 'Address 2', 'ContactNumber' => '1234567891', 'Email' => 'PESI@example.com'],
            ['CompanyName' => 'SPRITE', 'Address' => 'Address 3', 'ContactNumber' => '1234567892', 'Email' => 'SPRITE@example.com'],
        ]);
    }
}
