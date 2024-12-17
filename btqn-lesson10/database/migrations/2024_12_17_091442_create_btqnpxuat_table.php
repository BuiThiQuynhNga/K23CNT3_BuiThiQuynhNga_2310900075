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
        Schema::create('btqnpxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('btqnSoPX')->primary();
            $table->date('btqnNgayXuat');
            $table->string('btqnTenKH',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('btqnpxuat');
    }
};