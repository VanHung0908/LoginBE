<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['name' => 'Nguyễn Văn An', 'birthday' => '1985-05-15'],
            ['name' => 'Trần Thị Bình', 'birthday' => '1990-07-20'],
            ['name' => 'Lê Thị Cẩm Ly', 'birthday' => '1988-09-12'],
            ['name' => 'Phạm Văn Dũng', 'birthday' => '1992-11-30'],
            ['name' => 'Hoàng Thị Yến', 'birthday' => '1989-04-25'],
            ['name' => 'Đặng Văn Bảo', 'birthday' => '1991-08-19'],
            ['name' => 'Ngô Thị Hiền', 'birthday' => '1987-12-14'],
            ['name' => 'Bùi Văn Hồ', 'birthday' => '1993-03-05'],
            ['name' => 'Vũ Thị ý', 'birthday' => '1986-06-10'],
            ['name' => 'Dương Văn Bảo', 'birthday' => '1994-02-27'],
            ['name' => 'Lý Thị Khoa', 'birthday' => '1990-01-17'],
            ['name' => 'Tô Văn Long', 'birthday' => '1985-07-23']
        ];

        $addressBase = 'Client Address ';
        $phoneBase = '12345678';

        foreach ($clients as $index => $client) {
            $companyId = (int)($index / 4) + 1;

            DB::table('client_profiles')->insert([
                'Name' => $client['name'],
                'Birthday' => $client['birthday'],
                'Address' => $addressBase . ($index + 1),
                'PhoneNumber' => $phoneBase . ($index + 1),
                'CompanyID' => $companyId,
                'ContractID' => null, // Sẽ cập nhật sau khi tạo hợp đồng
            ]);
        }
    }
}
