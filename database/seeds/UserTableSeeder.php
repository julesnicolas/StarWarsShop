<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker\Factory::create();

        DB::table('users')->insert([[
             'name'          => 'admin',
             'email'         => 'admin@admin.com',
             'password'      => Hash::make('admin'),
             'status'        => 'admin',
             'paycard'       => null,
             'created_at'    => Carbon\Carbon::now(),
             'updated_at'    => Carbon\Carbon::now()
         ],[
             'name'          => 'jules',
             'email'         => 'jules@nicolas.com',
             'password'      => Hash::make('jules'),
             'status'        => 'notadmin',
             'paycard'       => $faker->creditCardNumber,
             'created_at'    => Carbon\Carbon::now(),
             'updated_at'    => Carbon\Carbon::now()
         ],[
             'name'          => 'vivian',
             'email'         => 'vivian@babacar.com',
             'password'      => Hash::make('vivian'),
             'status'        => 'notadmin',
             'paycard'       => $faker->creditCardNumber,
             'created_at'    => Carbon\Carbon::now(),
             'updated_at'    => Carbon\Carbon::now()
        ]]);
    }
}
