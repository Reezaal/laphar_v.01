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
        Schema::create('lokets', function (Blueprint $table) {
            $table->increments('id_loket');
            $table->date('Tanggal');
            $table->integer('Migrasi');
            $table->integer('Multiguna');
            $table->integer('PB');
            $table->integer('PD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokets');
    }
};
