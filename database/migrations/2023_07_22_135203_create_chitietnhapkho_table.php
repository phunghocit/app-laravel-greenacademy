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
        Schema::create('chitietnhapkho', function (Blueprint $table) {
            $table->id();
            $table->integer('ctnk_soluong')->unsigned()->nullable();
			$table->float('ctnk_thanhtien')->unsigned()->nullable();
			// $table->unsignedBigInteger('vt_id')->nullable();
            // $table->foreign('vt_id')->references('id')->on('vattu');
            // $table->unsignedBigInteger('nk_id')->nullable();
            // $table->foreign('nk_id')->references('id')->on('nhapkho');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitietnhapkho');
    }
};
