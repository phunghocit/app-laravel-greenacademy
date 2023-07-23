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
        Schema::table('chitietchuyenkho', function (Blueprint $table) {
   
			$table->unsignedBigInteger('vt_id')->nullable();
            $table->foreign('vt_id')->references('id')->on('vattu');
            $table->unsignedBigInteger('ck_id')->nullable();
            $table->foreign('ck_id')->references('id')->on('chuyenkho');
            $table->unsignedBigInteger('khocu_id')->nullable();
            $table->foreign('khocu_id')->references('id')->on('kho');
            $table->unsignedBigInteger('khomoi_id')->nullable();
            $table->foreign('khomoi_id')->references('id')->on('kho');
        });
    }

    /**s
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
