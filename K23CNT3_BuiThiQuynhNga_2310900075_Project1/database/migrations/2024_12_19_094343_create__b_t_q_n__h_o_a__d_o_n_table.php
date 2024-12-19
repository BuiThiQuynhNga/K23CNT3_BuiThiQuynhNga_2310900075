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
        Schema::create('BTQN_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('btqnMaHoaDon',255)->unique();
            $table->bigInteger('btqnMaKhachHang')->references('id')->on('BTQN_KHACH_HANG');
            $table->date('btqnNgayHoaDon');
            $table->string('btqnHoTenKhachHang',255);
            $table->string('btqnEmail',255);
            $table->string('btqnDienThoai',255);
            $table->string('btqnDiaChi',255);
            $table->float('btqnTongTriGia');
            $table->tinyInteger('btqnTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTQN_HOA_DON');
    }
};
