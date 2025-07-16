<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('web_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan', 155)->nullable();
            $table->string('alamat', 155)->nullable();
            $table->string('telp', 155)->nullable();
            $table->string('kontak_mail')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('sejarah')->nullable();
            $table->string('visi')->nullable();
            $table->string('misi')->nullable();
            $table->string('struktur_organisasi')->nullable();
            $table->json('personil')->nullable();
            $table->json('quick_links')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_profiles');
    }
};
