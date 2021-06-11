<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrameworkProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frameworks_projects')->insert([
            'project_id' => 1,
            'framework_id' => 15,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 2,
            'framework_id' => 14,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 2,
            'framework_id' => 8,
        ]);
    }
}
