<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('hero_sections', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('subtitle');
        $table->string('image_path')->nullable(); // Untuk gambar background
        $table->string('button_text_1')->default('Lihat Produk');
        $table->string('button_text_2')->default('Hubungi Kami');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
