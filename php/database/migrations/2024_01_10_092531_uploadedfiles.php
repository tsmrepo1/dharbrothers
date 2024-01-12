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
        Schema::create('uploadfile', function (Blueprint $table) {
            $table->id();
            $table->string('orderid');
            $table->string('thesis_main');
            $table->string('thesis_hard_cover');
            $table->string('thesis_soft_cover');
            $table->string('synopsis_main');
            $table->string('synopsis_cover');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploadfile');
    }
};
