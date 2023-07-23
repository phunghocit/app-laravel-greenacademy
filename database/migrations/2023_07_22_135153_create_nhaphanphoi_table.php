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
        Schema::create('nhaphanphoi', function (Blueprint $table) {
            $table->id();
            $table->string('npp_ma',255)->nullable();
			$table->string('npp_ten',255)->nullable();
			$table->string('npp_diachi',255)->nullable();
			$table->string('npp_sdt',255)->nullable();
			// $table->string('npp_fax',255)->nullable();
			$table->string('npp_taikhoan',255)->nullable();
			$table->string('npp_email',255)->nullable();
			$table->string('npp_nhanviendaidien',255)->nullable();
			// $table->integer('kv_id')->unsigned()->nullable();
            // $table->foreign('kv_id')->references('id')->on('khuvuc');
            $table->timestamps();
            // $table->softDeletes(); //deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhaphanphoi');
    }
};
