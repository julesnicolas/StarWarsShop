<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('media')->insert([ //,
                'name'          => $faker->imageUrl($width = 640, $height = 480),
                'created_at'    => Carbon\Carbon::now(),
                'updated_at'    => Carbon\Carbon::now()
            ]);
        }
    }
}
