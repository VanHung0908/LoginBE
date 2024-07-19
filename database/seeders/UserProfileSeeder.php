<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_profiles')->insert([
            [ 'Birthday' => '1990-01-01', 'Address' => 'Address 1', 'PhoneNumber' => '1234567890', 'StartDate' => '2020-01-01', 'EndDate' => null, 'UserID' => 1],
            [ 'Birthday' => '2002-01-02', 'Address' => 'Address 2', 'PhoneNumber' => '1234567891', 'StartDate' => '2020-01-02', 'EndDate' => null, 'UserID' => 2],
            [ 'Birthday' => '2002-01-03', 'Address' => 'Address 3', 'PhoneNumber' => '1234567892', 'StartDate' => '2020-01-03', 'EndDate' => null, 'UserID' => 3],
            [ 'Birthday' => '2002-01-04', 'Address' => 'Address 4', 'PhoneNumber' => '1234567893', 'StartDate' => '2020-01-04', 'EndDate' => null, 'UserID' => 4],
            [ 'Birthday' => '2002-01-05', 'Address' => 'Address 5', 'PhoneNumber' => '1234567894', 'StartDate' => '2020-01-05', 'EndDate' => null, 'UserID' => 5],
            [ 'Birthday' => '2002-01-06', 'Address' => 'Address 6', 'PhoneNumber' => '1234567895', 'StartDate' => '2020-01-06', 'EndDate' => null, 'UserID' => 6],
            [ 'Birthday' => '2002-01-07', 'Address' => 'Address 7', 'PhoneNumber' => '1234567896', 'StartDate' => '2020-01-07', 'EndDate' => null, 'UserID' => 7],
        ]);
    }
}
