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
        Schema::table('chuyenkho', function (Blueprint $table) {
            $table->unsignedBigInteger('nv_id')->unsigned()->nullable();
            $table->foreign('nv_id')->references('id')->on('nhanvien')->nullable();
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
