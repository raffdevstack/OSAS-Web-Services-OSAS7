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
            $table->id('student_osasid');
            $table->string('student_lname', 50); // Limit to 50 characters
            $table->string('student_fname', 50); // Limit to 50 characters
            $table->string('email', 100)->unique(); // Limit to 100 characters and make it unique
            $table->string('student_picture', 255);

            $table->string('student_address', 255)->nullable(); // Limit to 255 characters
            $table->string('student_course', 100)->nullable(); // Limit to 100 characters
            $table->string('student_section', 10)->nullable(); // Limit to 10 characters

            $table->string('password')->nullable(); // You should hash the password before storing it
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
