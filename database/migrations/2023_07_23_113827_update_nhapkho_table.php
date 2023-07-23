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
        Schema::table('nhapkho', function (Blueprint $table) {
			$table->unsignedBigInteger('npp_id')->nullable();
            $table->foreign('npp_id')->references('id')->on('nhaphanphoi');
            $table->unsignedBigInteger('nv_id')->nullable();
            $table->foreign('nv_id')->references('id')->on('nhanvien');
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
