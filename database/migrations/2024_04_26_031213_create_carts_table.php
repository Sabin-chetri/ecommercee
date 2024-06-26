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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            // $table->integer('uderid');
            // $table->unsignedBigInteger('userid');
            // $table->foreign('userid')->references()->on('User');
            $table->string('productImage');
            $table->string('productDescription')->nullable();
            $table->integer('productPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
