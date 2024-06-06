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
        Schema::create('lppms', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('namaKetua');
            $table->string('perguruanTinggi');
            $table->string('alamatPT');
            $table->string('userjss');
            $table->boolean('readed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lppms');
    }
};
