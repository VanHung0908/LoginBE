<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'MR VIET', 'email' => 'manager@example.com', 'password' => Hash::make('123'), 'RoleID' => 2, 'CompanyID' => 1, 'AuthenticStatus' => true],
            ['name' => 'Employee Hung', 'email' => 'Hung123@example.com', 'password' => Hash::make('123'), 'RoleID' => 1, 'CompanyID' => 1, 'AuthenticStatus' => true],
            ['name' => 'Employee Phu', 'email' => 'Phu123@example.com', 'password' => Hash::make('123'), 'RoleID' => 1, 'CompanyID' => 1, 'AuthenticStatus' => true],
            ['name' => 'Employee Tien', 'email' => 'Tien123@example.com', 'password' => Hash::make('123'), 'RoleID' => 1, 'CompanyID' => 2, 'AuthenticStatus' => true],
            ['name' => 'Employee Phuong', 'email' => 'Phuong123@example.com', 'password' => Hash::make('123'), 'RoleID' => 1, 'CompanyID' => 2, 'AuthenticStatus' => true],
            ['name' => 'Employee Thien', 'email' => 'Thien123@example.com', 'password' => Hash::make('123'), 'RoleID' => 1, 'CompanyID' => 3, 'AuthenticStatus' => true],
            ['name' => 'Employee Long', 'email' => 'Long123@example.com', 'password' => Hash::make('123'), 'RoleID' => 1, 'CompanyID' => 3, 'AuthenticStatus' => true],
        ]);
    }
}
