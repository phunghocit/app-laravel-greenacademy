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
        Schema::table('xuatkho', function (Blueprint $table) {

			$table->unsignedBigInteger('ct_id')->nullable();
            $table->foreign('ct_id')->references('id')->on('congtrinh')->nullable();
            $table->unsignedBigInteger('nv_id')->nullable();
            $table->foreign('nv_id')->references('id')->on('nhanvien')->nullable();
            $table->softDeletes(); //deleted_at
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
