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
        Schema::create('calon_penghunis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('nomor_telepon')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->dateTime('tanggal_lahir')->nullable();
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
        Schema::dropIfExists('calon_penghunis');
    }
};
