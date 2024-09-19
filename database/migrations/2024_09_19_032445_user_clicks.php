<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClicksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_clicks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Link the click to a user
            $table->foreignId('link_id')->constrained(); // Link the click to the specific link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('user_clicks');
    }
};
