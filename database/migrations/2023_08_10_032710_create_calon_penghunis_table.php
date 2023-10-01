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
            $table->string('nomor_telepon');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->dateTime('tanggal_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu'); 
            $table->string('nik');                        
            $table->string('telpon_ortu');                        
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');       
            $table->string('alamat_ortu');  
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
