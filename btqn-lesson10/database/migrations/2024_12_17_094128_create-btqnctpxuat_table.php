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
        Schema::create('btqnctpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('btqnSoPX');
            $table->string('btqnMaVTu');
            $table->integer('btqnSlXuat');
            $table->float('btqnDgXuat');
            //primary
            $table->primary(['btqnSoPX','btqnMaVTu']);
            //foreign
            $table->foreign('btqnSoPX')->references('btqnSoPX')->on('btqnpxuat');
            $table->foreign('btqnMaVTu')->references('btqnMaVTu')->on('btqnvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('btqnctpxuat');
    }
};
