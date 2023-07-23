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
        Schema::create('chuyenkho', function (Blueprint $table) {
            $table->id();
            $table->string('ck_ma',255)->nullable();
			$table->date('ck_ngay')->nullable();
			$table->string('ck_lydo',255)->nullable();
            // $table->unsignedBigInteger('nv_id')->unsigned()->nullable();
            // $table->foreign('nv_id')->references('id')->on('nhanvien')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chuyenkho');
    }
};
