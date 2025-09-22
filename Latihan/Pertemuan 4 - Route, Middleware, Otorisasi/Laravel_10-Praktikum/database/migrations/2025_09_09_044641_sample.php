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
        //
        Schema::create('mahasiwa', function (Blueprint $meja) {
            $meja->id();
            $meja->string('nama', 50);
            $meja->string('nim', 13)->unique();
            $meja->string('email', 50)->unique();
            $meja->string('jurusan', 50);
            $meja->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('mahasiwa');
    }
};
