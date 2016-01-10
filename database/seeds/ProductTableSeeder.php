<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker\Factory::create();
        $limit = 11;
        $rand = rand(1, 3);

        for ($i = 1; $i < $limit; $i++) {
            $content = $faker->text($maxNbChars = 200);
            $abstract = substr($content, 0, 75);

            DB::table('products')->insert([
                'category_id'  => $faker->numberBetween(1, 2),
                'title'        => $faker->sentence($rand),
                'abstract'     => $abstract,
                'content'      => $content,
                'publish_date' => Carbon\Carbon::now(),
                'price'        => $faker->randomFloat(2, 10, 89),
                'media_id'     => $i,
                'created_at'   => Carbon\Carbon::now(),
                'updated_at'   => Carbon\Carbon::now()
            ]);
        }
    }
}
