<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 // In your migration file
 
 public function up()
 {
     Schema::create('blogs', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('image')->nullable();
         $table->string('link');
         $table->date('published_date'); // Add this line
         $table->timestamps();
     });
 }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
