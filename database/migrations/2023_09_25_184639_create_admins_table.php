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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('admin_lname', 20)->notNull();
            $table->string('admin_fname', 20)->notNull();
            $table->string('admin_mi', 3)->notNull();
            $table->string('employee_id', 12)->nullable();
            $table->unsignedInteger('office_id')->nullable();
            $table->unsignedInteger('position_id')->nullable();
            $table->string('admin_contact', 15)->nullable();
            $table->string('admin_sign', 50)->nullable();
            $table->unsignedInteger('admintype_id')->nullable();
            $table->string('email', 50)->notNull()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
