<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();       // ex: admin, user, superadmin (kode sistem)
            $table->string('display_name');         // ex: "Administrator", "Pengguna Biasa"
            $table->text('description')->nullable();// deskripsi tentang peran
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
