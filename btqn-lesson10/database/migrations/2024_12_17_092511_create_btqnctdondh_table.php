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
        Schema::create('btqnctdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('btqnSoDH');
            $table->string('btqnMaVTu');
            $table->integer('btqnSlDat');
            //tạo khoá chính trên hai cột (btqnSoDH,btqnMaVTu)
            $table->primary(['btqnSoDH','btqnMaVTu']);
            //khoá ngoại
            $table->foreign('btqnSoDH')->references('btqnSoDH')->on('btqndondh');
            $table->foreign('btqnMaVTu')->references('btqnMaVTu')->on('btqnvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('btqnctdondh');
    }
};
