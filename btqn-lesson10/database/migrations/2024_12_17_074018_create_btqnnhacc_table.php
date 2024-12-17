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
        Schema::create('btqnnhacc', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('btqnMaNCC')->primary();
            $table->string('btqnTenNCC');
            $table->string('btqnDiaChi');
            $table->string('btqnDienThoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('btqnnhacc');
    }
};
