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
        Schema::create('BTQN_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('btqnTaiKhoan',255)->unique();
            $table->string('btqnMatKhau',255);
            $table->tinyInteger('btqnTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BTQN_QUAN_TRI');
    }
};
