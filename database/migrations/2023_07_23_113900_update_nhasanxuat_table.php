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
        Schema::table('nhasanxuat', function (Blueprint $table) {
            $table->unsignedBigInteger('kv_id')->nullable();
            $table->foreign('kv_id')->references('id')->on('khuvuc');
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
