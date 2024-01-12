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
        Schema::create('userwisedesigns', function (Blueprint $table) {
            $table->id();
            $table->string('orderid');
            $table->string('url');
            $table->string('status');
            $table->string('reason');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userwisedesigns');
    }
};
