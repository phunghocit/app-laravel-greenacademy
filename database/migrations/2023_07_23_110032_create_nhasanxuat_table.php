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
        Schema::create('nhasanxuat', function (Blueprint $table) {
            $table->id();
            $table->string('nsx_ma',255)->nullable();
			$table->string('nsx_ten',255)->nullable();
            // $table->unsignedBigInteger('kv_id')->nullable();
            // $table->foreign('kv_id')->references('id')->on('khuvuc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhasanxuat');
    }
};
