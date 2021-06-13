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
        ]);
        DB::table('projects')->insert([
            'projectName' => 'Api Weather',
        ]);
        DB::table('projects')->insert([
            'projectName' => "Emporium Website",
        ]);
        DB::table('projects')->insert([
            'projectName' => 'The Real Wedding Backoffice',
        ]);
        DB::table('projects')->insert([
            'projectName' => 'Yahtzee Game',
        ]);
        DB::table('projects')->insert([
            'projectName' => 'MolenGeek Room Booking System',
        ]);
        DB::table('projects')->insert([
            'projectName' => 'The Labs Backoffice',
        ]);
        DB::table('projects')->insert([
            'projectName' => "Real time chat",
        ]);
        DB::table('projects')->insert([
            'projectName' => 'Restaurants Search',
        ]);
        DB::table('projects')->insert([
            'projectName' => 'Portfolio',
        ]);
    }
}
