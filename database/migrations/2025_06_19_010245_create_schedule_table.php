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
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_week')->comment('schedule\'s day of week')->max(10);
            $table->time('time_slot')->comment('schedule\'s time slot');
            $table->string('room')->comment('schedule\'s room')->max(20);
            $table->integer('term')->comment('schedule\'s term');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
