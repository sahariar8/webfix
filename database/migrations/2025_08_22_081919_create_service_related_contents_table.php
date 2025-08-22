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
        Schema::create('service_related_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_desc');
            $table->longText('long_desc');
            $table->string('image');
            $table->string('tagline');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_related_contents');
    }
};
