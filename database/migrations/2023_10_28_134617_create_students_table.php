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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('student_lname', 50); // Limit to 50 characters
            $table->string('student_fname', 50); // Limit to 50 characters
            $table->string('student_mi', 3); // Limit to 50 characters
            $table->string('email', 100)->unique(); // Limit to 100 characters and make it unique
            $table->string('password'); // You should hash the password before storing it
            $table->string('student_address', 255); // Limit to 255 characters
            $table->string('student_image')->nullable(); // Store the image path, make it nullable
            $table->string('student_course', 100); // Limit to 100 characters
            $table->string('student_section', 10); // Limit to 10 characters
            $table->Decimal('google_id', 21, 0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
