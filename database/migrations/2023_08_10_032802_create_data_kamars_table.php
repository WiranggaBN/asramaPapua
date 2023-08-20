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
        Schema::create('data_kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kamar');
            $table->string('nama_kamar');
            $table->string('kapasitas_kamar');
            $table->string('aset_kamar');
            $table->string('nama_penghuni');
            $table->string('status_kamar');            
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kamars');
    }
};
