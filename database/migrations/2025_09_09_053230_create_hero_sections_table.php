<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/2025_09_09_000000_create_hero_sections_table.php
public function up()
{
    Schema::create('hero_sections', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('subtitle')->nullable();
        $table->text('description');
        $table->string('image_url');
        $table->string('cta_text');
        $table->string('cta_link');
        $table->string('icon')->nullable(); // Store icon name or component type
        $table->integer('sort_order')->default(0);
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
