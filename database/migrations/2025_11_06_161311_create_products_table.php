<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique();
    $table->unsignedBigInteger('category_id')->nullable();
    $table->text('description')->nullable();
    $table->string('label')->nullable();
    $table->decimal('price', 10, 2);
    $table->decimal('discount_price', 10, 2)->nullable();
    $table->string('image')->nullable();
    $table->boolean('is_popular')->default(false);
    $table->boolean('is_daily_best_sell')->default(false);
    $table->boolean('status')->default(true);

    // ✅ Rating fields
    $table->decimal('rating', 3, 1)->default(0);
    $table->integer('rating_count')->default(0);

    $table->timestamps();
    $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
});
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
