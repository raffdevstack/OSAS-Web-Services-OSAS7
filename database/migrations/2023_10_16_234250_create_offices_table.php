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
        Schema::create('offices', function (Blueprint $table) {
            $table->id('office_id');
            $table->string('office_name', 50);
            $table->string('office_desc', 100);
            $table->timestamps();
        });

         // Offices initial data
        DB::table('offices')->insert([
            'office_id' => 1,
            'office_name' => 'OSAS',
            'office_desc' => 'This is a sample office desciption',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
