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
        Schema::create('BTQN_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('btqnMaSanPham',255)->unique();
            $table->string('btqnTenSanPham',255);
            $table->string('btqnHinhAnh',255);
            $table->integer('btqnSoLuong');
            $table->float('btqnDonGia');
            $table->bigInteger('btqnMaLoai')->references('id')->on('BTQN_LOAI_SAN_PHAM');
            $table->tinyInteger('btqnTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTQN_SAN_PHAM');
    }
};
