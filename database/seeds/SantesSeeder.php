<?php

use Illuminate\Database\Seeder;

class SantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('santes')->insert([
            'njf_conjoint' => 'Age',
            'prenom_conjoint' => 'Polys',
            'nb_enfants' => 2,
            'users_id' => 1,
            'contrats_id' => 1,
            'valide' => 0,

        ]);
    }
}
