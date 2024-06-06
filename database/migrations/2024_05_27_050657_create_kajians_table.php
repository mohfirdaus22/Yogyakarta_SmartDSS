<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kajians', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('tahun');
            $table->string('lokasi');
            $table->string('sektoral');
            $table->longText('latar');
            $table->longText('metodologi');
            $table->string('pelaksana')->nullable();
            $table->longText('data')->nullable();
            $table->string('file')->nullable();
            $table->string('unit_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kajians');
    }
};
