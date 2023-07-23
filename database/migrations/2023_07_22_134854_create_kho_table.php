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
        Schema::create('kho', function (Blueprint $table) {
            $table->id();
            $table->string('kho_ma',255)->nullable();
			$table->string('kho_ten',255)->nullable();
			$table->string('kho_lienhe',255)->nullable();
			$table->string('kho_diachi',255)->nullable();
			$table->string('kho_sdt',255)->nullable();
			$table->string('kho_quanly',255)->nullable();
			$table->string('kho_ghichu',255)->nullable();
            $table->timestamps();
            // $table->softDeletes(); //deleted_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kho');
    }
};
