<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('tags')->insert([[
            'name'          => 'Anakin',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Dark Vador',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Pisolet',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Podracer',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Sabre',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Senat',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Snowtrooper',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Stormtrooper',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Windu',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'name'          => 'Yoda',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ]]);
    }
}
