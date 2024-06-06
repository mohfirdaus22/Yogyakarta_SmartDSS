<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;
use function Symfony\Component\String\u;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rekomendasiopds', function (Blueprint $table) {
            $table->id()->Unique();
            $table->string('id_kajian')->nullable();
            $table->string('opd_id')->nullable();
            $table->longText('rekomendasi'); // Menggunakan tipe longText
            $table->longText('tindak_lanjut'); // Menggunakan tipe longText
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
        Schema::dropIfExists('rekomendasiopds');
    }
};
