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
        Schema::create('chitietxuatkho', function (Blueprint $table) {
            $table->id();
            $table->integer('ctxk_soluong')->unsigned()->nullable();
			$table->float('ctxk_thanhtien')->unsigned()->nullable();
			// $table->unsignedBigInteger('vt_id')->nullable();
            // $table->foreign('vt_id')->references('id')->on('vattu');
            // $table->unsignedBigInteger('xk_id')->nullable();
            // $table->foreign('xk_id')->references('id')->on('xuatkho');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitietxuatkho');
    }
};
