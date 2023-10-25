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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('status')->default(0);
            $table->string('payment_method');
            $table->string('payment_status');
            $table->integer('payment_id');
            $table->integer('total_price');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('name');
            $table->string('country');
            $table->string('city');
            $table->string('zip');
            $table->decimal('shipping_price',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};