<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instalment_schedules', function (Blueprint $table) {
            $table->id();
            $table->string("kontrak_no")->nullable();
            $table->integer("angsuran_ke")->nullable();
            $table->integer("angsuran_per_bulan")->nullable();
            $table->enum("sudah_bayar", ["BELUM", "SUDAH"])->default("BELUM");
            $table->date("tanggal_jatuh_tempo")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instalment_schedules');
    }
};
