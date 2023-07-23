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
        Schema::table('vattu', function (Blueprint $table) {

			$table->unsignedBigInteger('dvt_id')->nullable();
            $table->foreign('dvt_id')->references('id')->on('donvitinh');
			$table->unsignedBigInteger('nvt_id')->nullable();
            $table->foreign('nvt_id')->references('id')->on('nhomvattu');
            $table->unsignedBigInteger('cl_id')->nullable();
            $table->foreign('cl_id')->references('id')->on('chatluong');
            $table->unsignedBigInteger('kho_id')->nullable();
            $table->foreign('kho_id')->references('id')->on('kho');
            $table->unsignedBigInteger('npp_id')->nullable();
            $table->foreign('npp_id')->references('id')->on('nhaphanphoi');
            $table->unsignedBigInteger('nsx_id')->nullable();
            $table->foreign('nsx_id')->references('id')->on('nhasanxuat');
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
