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
        Schema::create('BTQN_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('btqnHoaDonID')->references('id')->on('BTQN_HOA_DON');
            $table->bigInteger('btqnSanPhamID')->references('id')->on('BTQN_SAN_PHAM');
            $table->integer('btqnSoLuongMua');
            $table->float('btqnDonGiaMua');
            $table->float('btqnThanhTien');
            $table->tinyInteger('btqnTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTQN_CT_HOA_DON');
    }
};
