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
            $table->unsignedBigInteger('kamar_id')->nullable();  
            $table->dateTime('tanggal_keluar')->nullable();
            $table->dateTime('tanggal_masuk')->nullable();
            $table->string('jam_keluar')->nullable();
            $table->string('jam_masuk')->nullable();
            $table->string('alasan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('validasi')->nullable();
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
