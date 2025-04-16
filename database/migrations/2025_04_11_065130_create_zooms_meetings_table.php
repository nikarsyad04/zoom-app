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
        Schema::create('zoos_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('zoom_id');
            $table->string('topic');
            $table->dateTime('start_time');
            $table->integer('duration');
            $table->string('join_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zoos_meetings');
    }
};
