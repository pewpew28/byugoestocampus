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
        Schema::create('proposal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelompok');
            $table->string('judul')->nullable();
            $table->longText('ide_bisnis')->nullable();
            $table->string('bmc')->nullable();
            $table->longText('deskripsi_lr')->nullable();
            $table->string('file_lr')->nullable();
            $table->string('file_pemasaran')->nullable();
            $table->longText('deskripsi_pemasaran')->nullable();
            $table->string('file_maintenance')->nullable();
            $table->longText('deskripsi_maintenance')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_kelompok')->references('id')->on('kelompok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposal');
    }
};
