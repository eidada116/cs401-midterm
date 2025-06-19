<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('teachers', function(Blueprint $table){
            $table->id();
            $table->string('first_name')->comment('first name of teacher');
            $table->string('last_name')->comment('last name of teacher');
            $table->string('email')->comment('teacher\'s email')->max(50);
            $table->string('department')->comment('teacher\'s designated department')->max(10);
            $table->dateTime('birthday')->comment('teacher birthday');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
