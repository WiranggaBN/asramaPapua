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
        Schema::create('penghunis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->dateTime('tanggal_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu');                        
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');            
            $table->dateTime('tanggal_lahir_ayah');
            $table->dateTime('tanggal_lahir_ibu');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghunis');
    }
};
