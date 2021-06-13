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
        DB::table('frameworks_projects')->insert([
            'project_id' => 3,
            'framework_id' => 6,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 3,
            'framework_id' => 7,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 3,
            'framework_id' => 8,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 3,
            'framework_id' => 13,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 4,
            'framework_id' => 2,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 4,
            'framework_id' => 9,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 5,
            'framework_id' => 4,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 5,
            'framework_id' => 8,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 5,
            'framework_id' => 13,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 6,
            'framework_id' => 2,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 6,
            'framework_id' => 9,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 7,
            'framework_id' => 2,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 7,
            'framework_id' => 9,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 8,
            'framework_id' => 1,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 8,
            'framework_id' => 10,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 8,
            'framework_id' => 9,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 8,
            'framework_id' => 11,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 9,
            'framework_id' => 5,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 9,
            'framework_id' => 8,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 10,
            'framework_id' => 3,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 10,
            'framework_id' => 12,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 10,
            'framework_id' => 8,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 10,
            'framework_id' => 9,
        ]);
        DB::table('frameworks_projects')->insert([
            'project_id' => 10,
            'framework_id' => 1,
        ]);
    }
}
