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
        Schema::create('users_carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID')->unsigned();
            $table->unsignedBigInteger('cartID')->unsigned();
            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('cartID')->references('id')->on('carts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_carts');
    }
};
