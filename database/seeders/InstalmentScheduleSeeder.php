<?php

namespace Database\Seeders;

use App\Models\InstalmentSchedule;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstalmentScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstalmentSchedule::insert(
            [
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 1,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "SUDAH",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-1-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 2,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "SUDAH",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-2-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 3,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "SUDAH",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-3-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 4,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "SUDAH",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-4-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 5,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "SUDAH",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-5-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 6,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-6-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 7,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-7-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 8,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-8-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 9,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-9-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 10,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-10-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 11,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-11-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 12,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2024-12-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 13,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2025-1-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 14,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2025-2-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "kontrak_no" => "AGR00001",
                    "angsuran_ke" => 15,
                    "angsuran_per_bulan" => 12907000,
                    "sudah_bayar" => "BELUM",
                    "tanggal_jatuh_tempo" => Carbon::parse("2025-3-25"),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
            ]
        );
    }
}
