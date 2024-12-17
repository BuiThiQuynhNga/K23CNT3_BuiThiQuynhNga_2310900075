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
        Schema::create('btqnctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('btqnSoPN');
            $table->string('btqnMaVTu');
            $table->integer('btqnSlNhap');
            $table->float('btqnDgNhap');
            //primary
            $table->primary(['btqnSoPN','btqnMaVTu']);
            //foreign
            $table->foreign('btqnSoPN')->references('btqnSoPN')->on('btqnpnhap');
            $table->foreign('btqnMaVTu')->references('btqnMaVTu')->on('btqnvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('btqnctpnhap');
    }
};
