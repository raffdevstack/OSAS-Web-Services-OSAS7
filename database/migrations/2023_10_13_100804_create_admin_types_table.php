<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_types', function (Blueprint $table) {
            $table->id('admintype_id');
            $table->string('admintype_name');
            $table->string('admintype_desc');
            $table->timestamps();
        });

        // Admin Types initial data
        DB::table('admin_types')->insert([
            'admintype_id' => 1,
            'admintype_name' => 'Super Admin',
            'admintype_desc' => 'This is a sample admin type desciption',
        ]);
        DB::table('admin_types')->insert([
            'admintype_id' => 2,
            'admintype_name' => 'Office Staff',
            'admintype_desc' => 'This is a sample admin type desciption',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_types');
    }
};
