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
        Schema::create('nhapkho', function (Blueprint $table) {
            $table->id();
            $table->string('nk_ma',255)->nullable();
			$table->date('nk_ngaylap')->nullable();
			$table->string('nk_lydo',255)->nullable();
			$table->float('nk_tongtien')->unsigned()->nullable();
			// $table->unsignedBigInteger('npp_id')->nullable();
            // $table->foreign('npp_id')->references('id')->on('nhaphanphoi');
            // $table->unsignedBigInteger('nv_id')->nullable();
            // $table->foreign('nv_id')->references('id')->on('nhanvien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhapkho');
    }
};
