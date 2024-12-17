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
        Schema::create('btqnpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('btqnSoPN')->primary();
            $table->date('btqnNgayNhap');
            $table->string('btqnSoDH',100);
            //foreign 
            $table->foreign('btqnSoDH')->references('btqnSoDH')->on('btqndondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('btqnpnhap');
    }
};
