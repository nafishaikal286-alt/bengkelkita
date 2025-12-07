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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nama layanan, harus unik
            $table->text('description')->nullable(); // Deskripsi layanan
            $table->decimal('price', 8, 2); // Harga layanan, misalnya Rp 100.000,00
            $table->integer('duration_minutes'); // Durasi layanan dalam menit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};