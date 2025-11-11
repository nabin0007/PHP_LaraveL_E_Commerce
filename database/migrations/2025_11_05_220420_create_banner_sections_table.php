<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('banner_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');                 // Banner title
            $table->string('subtitle')->nullable();  // Optional subtitle
            $table->string('banner_image');          // Image path
            $table->string('link')->nullable();      // Optional link
            $table->enum('banner_type', ['horizontal', 'vertical'])->default('horizontal'); // ✅ Banner layout type
            $table->boolean('active')->default(true); // Active or not
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('banner_sections');
    }
};
