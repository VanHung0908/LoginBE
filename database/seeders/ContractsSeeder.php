<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientProfiles = DB::table('client_profiles')->get();
        $contractStatuses = ['Active', 'Pending', 'Completed', 'Cancelled'];

        foreach ($clientProfiles as $profile) {
            // Số hợp đồng ngẫu nhiên từ 0 đến 3 cho mỗi khách hàng
            $numContracts = rand(0, 3);

            for ($i = 0; $i < $numContracts; $i++) {
                $contractId = DB::table('contracts')->insertGetId([
                    'Name' => 'Advertising Contract ',
                    'ContractValue' => rand(1000, 10000),
                    'StartDate' => Carbon::now()->subMonths(rand(1, 12))->toDateString(),
                    'EndDate' => Carbon::now()->addMonths(rand(1, 12))->toDateString(),
                    'Status' => $contractStatuses[array_rand($contractStatuses)],
                    'PaymentTerms' => 'Payment in ' . rand(1, 12) . ' installments',
                    'Signatory' => $profile->Name, // Lấy tên của client làm người ký
                ]);

                // Cập nhật client_profiles với ContractID nếu chưa có
                if (is_null($profile->ContractID)) {
                    DB::table('client_profiles')
                        ->where('id', $profile->id)
                        ->update(['ContractID' => $contractId]);
                }
            }
        }
    }
}
