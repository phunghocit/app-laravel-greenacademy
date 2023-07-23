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
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->id();
            $table->string('nv_ma',255)->nullable();
			$table->string('nv_ten',255)->nullable();
			$table->string('nv_gioitinh',255)->nullable();
			$table->date('nv_ngaysinh')->nullable();
			$table->string('nv_diachi',255)->nullable();
			$table->string('nv_cmnd',255)->nullable();
			$table->string('nv_sdt',255)->nullable();
			$table->string('nv_email',255)->nullable();
			$table->date('nv_ngayvaolam')->nullable();
			// $table->unsignedBigInteger('pb_id')->nullable();
            // $table->foreign('pb_id')->references('id')->on('phongban')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes(); //deleted_at

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhanvien');
    }
};
