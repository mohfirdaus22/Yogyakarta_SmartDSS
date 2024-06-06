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
        Schema::create('permintaans', function (Blueprint $table) {
            $table->id();
            $table->string('jss');
            $table->string('nama');
            $table->string('email');
            $table->string('judul');
            $table->string('tahun');
            $table->string('keperluan');
            $table->string('instansi');
            $table->date('tanggal');
            $table->boolean('status');
            $table->boolean('readed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaans');
    }
};
