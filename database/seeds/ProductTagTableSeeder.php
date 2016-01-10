<?php

use Illuminate\Database\Seeder;

class ProductTagTableSeeder extends Seeder{

    public function run(){
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('product_tags')->insert([
                'product_id'   => $faker->numberBetween(1, 10),
                'tag_id'       => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
