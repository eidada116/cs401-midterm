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
        Schema::create('students', function(Blueprint $table){
            $table->id();
            $table->string('first_name')->comment('first name of student');
            $table->string('last_name')->comment('last name of student');
            $table->string('program')->comment('student\'s dedicated program');
            $table->string('enrollment_year')->comment('student\'s enrolled year')->max(4);
            $table->dateTime('birthday')->comment('student birthday');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('students');
    }
};
