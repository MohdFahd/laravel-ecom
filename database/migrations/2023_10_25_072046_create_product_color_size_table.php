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
        Schema::create('product_color_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pro_color_id');
            $table->unsignedBigInteger('pro_size_id');
            $table->foreign('pro_color_id')->references('id')->on('product_colors');
            $table->foreign('pro_size_id')->references('id')->on('product_sizes');
            $table->integer('qty')->default(0);
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_color_size');
    }
};