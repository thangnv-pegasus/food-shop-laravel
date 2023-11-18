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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->float('price_sale')->nullable();
            $table->string('brand')->nullable();
            $table->string('origin')->nullable();
            $table->float('weigh')->nullable();
            $table->string('collection');
            $table->longText('description')->nullable();
            $table->longText('detail');
            $table->json('images');
            $table->integer('sold')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
