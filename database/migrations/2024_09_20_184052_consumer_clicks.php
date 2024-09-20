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
        Schema::create('consumer_clicks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consumer_id')->constrained(); // Foreign key to consumer table
            $table->foreignId('link_id')->constrained(); // Foreign key to links table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumer_clicks');
    }
};
