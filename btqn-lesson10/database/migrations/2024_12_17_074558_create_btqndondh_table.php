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
        Schema::create('btqndondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('btqnSoDH')->primary();
            $table->date('btqnNgayDH');
            $table->string('btqnMaNCC');
            $table->foreign('btqnMaNCC')->references('btqnMaNCC')->on('btqnnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('btqndondh');
    }
};
