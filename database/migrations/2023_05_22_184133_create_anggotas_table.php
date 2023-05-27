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
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->bigInteger('angkatan_id')->unsigned();
            $table->foreign('angkatan_id')->references('id')->on('angkatan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('nama_anggota');
            $table->string('jabatan_anggota');
            $table->string('nama_kampus');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
