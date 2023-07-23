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
        Schema::table('vattukho', function (Blueprint $table) {
            $table->unsignedBigInteger('vt_id')->nullable();
            $table->foreign('vt_id')->references('id')->on('vattu');
            $table->unsignedBigInteger('kho_id')->nullable();
            $table->foreign('kho_id')->references('id')->on('kho');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
