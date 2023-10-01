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
            $table->string('username');
            $table->string('password');
            $table->string('level');
            $table->unsignedBigInteger('kamar_id')->nullable();  
            $table->string('email');
            $table->string('nomor_telepon')->nullable();  
            $table->string('jenis_kelamin')->nullable();  
            $table->string('alamat')->nullable();  
            $table->dateTime('tanggal_lahir')->nullable();  
            $table->string('nama_ayah')->nullable();  
            $table->string('nama_ibu')->nullable();   
            $table->string('nik')->nullable();                          
            $table->string('telpon_ortu')->nullable();                          
            $table->string('pekerjaan_ayah')->nullable();  
            $table->string('pekerjaan_ibu')->nullable();         
            $table->string('alamat_ortu')->nullable();                                           
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
