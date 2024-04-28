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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ketua');
            $table->unsignedBigInteger('id_kelompok');
            $table->unsignedBigInteger('id_proposal');
            $table->timestamps();

            $table->foreign('id_ketua')->references('id')->on('users');
            $table->foreign('id_kelompok')->references('id')->on('kelompok');
            $table->foreign('id_proposal')->references('id')->on('proposal');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
