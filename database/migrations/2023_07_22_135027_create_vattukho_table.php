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
        Schema::create('vattukho', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('vt_id')->nullable();
            // $table->foreign('vt_id')->references('id')->on('vattu');
            // $table->unsignedBigInteger('kho_id')->nullable();
            // $table->foreign('kho_id')->references('id')->on('kho');
            $table->integer('sl_nhap')->nullable();
            $table->integer('sl_xuat')->nullable();
            $table->integer('sl_ton')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vattukho');
    }
};
