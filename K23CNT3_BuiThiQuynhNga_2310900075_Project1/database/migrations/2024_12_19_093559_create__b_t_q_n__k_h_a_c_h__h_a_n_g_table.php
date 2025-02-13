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
        Schema::create('BTQN_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('btqnKhachHang',255)->unique();
            $table->string('btqnHoTenKhachHang',255);
            $table->string('btqnEmail',255);
            $table->string('btqnMatKhau',255);
            $table->string('btqnDienThoai',255);
            $table->string('btqnDiaChi',255);
            $table->date('btqnNgayDangKy');
            $table->tinyInteger('btqnTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTQN_KHACH_HANG');
    }
};
