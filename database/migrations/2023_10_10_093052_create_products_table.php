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
            $table->string('slug')->unique();
            $table->string('short_description');
            $table->text('description');
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();
            $table->string('SKU');
            $table->enum('stock_status', ["instock", "outofstock"]); // Corrected 'outofstock' spelling
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('quantity')->default(1); // Corrected 'quantity' spelling
            $table->string('image');
            $table->text('images');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Corrected 'foreign' spelling and 'cascade' spelling
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade'); // Corrected 'foreign' spelling and 'cascade' spelling
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
