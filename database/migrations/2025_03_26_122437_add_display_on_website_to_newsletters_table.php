<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('newsletters', function (Blueprint $table) {
            $table->boolean('display_on_website')->default(false);
        });
    }

    public function down()
    {
        Schema::table('newsletters', function (Blueprint $table) {
            $table->dropColumn('display_on_website');
        });
    }
};