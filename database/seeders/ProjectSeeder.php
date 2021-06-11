<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'projectName' => 'SpriteSheet Loaders',
            'images' => 'rainbowloader'
        ]);
        DB::table('projects')->insert([
            'projectName' => 'Api Weather',
            'images' => 'weather'
        ]);
    }
}
