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
        Schema::create('xuatkho', function (Blueprint $table) {
            $table->id();
            $table->string('xk_ma',255)->nullable();
			$table->date('xk_ngaylap')->nullable();
			$table->string('xk_diachi',255)->nullable();
			$table->string('xk_lydo',255)->nullable();
			$table->float('xk_tongtien')->unsigned()->nullable();
			// $table->unsignedBigInteger('ct_id')->nullable();
            // $table->foreign('ct_id')->references('id')->on('congtrinh')->nullable();
            // $table->unsignedBigInteger('nv_id')->nullable();
            // $table->foreign('nv_id')->references('id')->on('nhanvien')->nullable();
            $table->timestamps();
            // $table->softDeletes(); //deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xuatkho');
    }
};
