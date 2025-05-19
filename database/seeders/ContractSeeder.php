<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contract::insert(
            [
                "kontrak_no" => "AGR00001",
                "client_name" => "SUGUS",
                "otr" => 240000000,
                "jangka_waktu" => 12,
                "down_payment" => 48000000,
            ]
        );
    }
}
