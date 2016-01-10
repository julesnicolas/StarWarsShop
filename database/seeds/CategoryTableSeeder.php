<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('categories')->insert([[
            'title'         => 'Casques',
            'description'   => 'Notre sélection des meilleures répliques de casque de la saga STAR WARS tout épisode confondu. Retrouvez les copies exactes des snowtrooper, stormtrooper et bien sûr l\'incontournable DARK VADOR ! Editions limitées.',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ],[
            'title'         => 'Lasers',
            'description'   => 'Notre espace trafic d\'armes. Vous trouverez dans cette section tout ce dont vous aurez besoin pour conquérir le monde façon Jedi, Sith ou encore Shadowtrooper.. N\'hesitez plus et "May the Force be with you".',
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now()
        ]]);
    }
}
