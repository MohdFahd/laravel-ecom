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
        Schema::create('pro_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('pro_color_size_id');
            $table->foreign('pro_color_size_id')->references('id')->on('product_color_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_imgs');
    }
};