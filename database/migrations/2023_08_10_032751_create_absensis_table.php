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
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nama_kamar');
            $table->dateTime('tanggal_keluar');
            $table->dateTime('tanggal_masuk');
            $table->string('jam_keluar');
            $table->string('jam_masuk');
            $table->string('alasan');
            $table->string('keterangan');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
