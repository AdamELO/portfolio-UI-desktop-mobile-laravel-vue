<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'frameworks' )->insert( [
            'name' => 'Laravel 8',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Laravel 7',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Vue',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'React',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'React Native',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Html5',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Css3',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'JavaScript',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Php',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'TailwindCss',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'LiveWire',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Vuetify',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Bootstrap',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'JQuery',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Figma',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Angular',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'C#',
        ] );
        DB::table( 'frameworks' )->insert( [
            'name' => 'Asp.Net',
        ] );
    }
}
