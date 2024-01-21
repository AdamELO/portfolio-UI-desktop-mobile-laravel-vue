<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'src' => '../assets/projects/rainbowloader.png',
            'src_alt' => 'rainbowloader',
            'project_id' => '1'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/leafwindloader.png',
            'src_alt' => 'leafwindloader',
            'project_id' => '1'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/halloweenloader.png',
            'src_alt' => 'halloweenloader',
            'project_id' => '1'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/weather.png',
            'src_alt' => 'weather',
            'project_id' => '2'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/empor.png',
            'src_alt' => 'empor',
            'project_id' => '3'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/emporiumcarousel.png',
            'src_alt' => 'emporiumcarousel',
            'project_id' => '3'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/emporiumproducts.png',
            'src_alt' => 'emporiumproducts',
            'project_id' => '3'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/weddingbo.png',
            'src_alt' => 'weddingbo',
            'project_id' => '4'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/weddinggal.png',
            'src_alt' => 'weddinggal',
            'project_id' => '4'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/weddingheader.png',
            'src_alt' => 'weddingheader',
            'project_id' => '4'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/weddingabout.png',
            'src_alt' => 'weddingabout',
            'project_id' => '4'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/yahtzeeStart.png',
            'src_alt' => 'yahtzeeStart',
            'project_id' => '5'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/yathzeeRoll.png',
            'src_alt' => 'yathzeeRoll',
            'project_id' => '5'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/yahtzeeEnd.png',
            'src_alt' => 'yahtzeeEnd',
            'project_id' => '5'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/MolengeekLogin.png',
            'src_alt' => 'MolengeekLogin',
            'project_id' => '6'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/tablette.png',
            'src_alt' => 'tablette',
            'project_id' => '6'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/reservation.png',
            'src_alt' => 'reservation',
            'project_id' => '6'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/agenda2.png',
            'src_alt' => 'agenda2',
            'project_id' => '6'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/backofficemolengeek.png',
            'src_alt' => 'backofficemolengeek',
            'project_id' => '6'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/labs.png',
            'src_alt' => 'labs',
            'project_id' => '7'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/labsservice.png',
            'src_alt' => 'labsservice',
            'project_id' => '7'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/labstesti.png',
            'src_alt' => 'labstesti',
            'project_id' => '7'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/articlelabs.png',
            'src_alt' => 'articlelabs',
            'project_id' => '7'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/whatsup_home.png',
            'src_alt' => 'whatsup_home',
            'project_id' => '8'
        ]);
        DB::table('images')->insert([
            'src' => "../assets/projects/whats'up_login.png",
            'src_alt' => "whats'up_login",
            'project_id' => '8'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/whatsup_add_friend.png',
            'src_alt' => 'whatsup_add_friend',
            'project_id' => '8'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/whatsup_chat.png',
            'src_alt' => 'whatsup_chat',
            'project_id' => '8'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/whatsup_dash.png',
            'src_alt' => 'whatsup_dash',
            'project_id' => '8'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/restaurants.png',
            'src_alt' => 'restaurants',
            'project_id' => '9'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/portfolio.png',
            'src_alt' => 'portfolio',
            'project_id' => '10'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/solarSystem.png',
            'src_alt' => 'solar-system',
            'project_id' => '11'
        ]);
        DB::table('images')->insert([
            'src' => '../assets/projects/planetDetails.png',
            'src_alt' => 'solar-system',
            'project_id' => '11'
        ]);
    }
}
