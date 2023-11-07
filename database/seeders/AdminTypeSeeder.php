<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert initial data
        DB::table('admin_types')->insert([
            'admintype_id' => 1,
            'admintype_name' => 'Super Admin',
            'admintype_desc' => 'This is a sample admin type desciption',
        ]);
    }
}
