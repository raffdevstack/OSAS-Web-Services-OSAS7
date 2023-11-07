<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate the table to remove all existing data
        DB::table('admin_types')->truncate();

        // Offices initial data
        DB::table('offices')->insert([
            'office_id' => 1,
            'office_name' => 'OSAS',
            'office_desc' => 'This is a sample office desciption',
        ]);

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
}
