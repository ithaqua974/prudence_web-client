<?php

use Illuminate\Database\Seeder;

class AutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autos')->insert([
        'modele'=> 'Mégane',
        'Marque'=>'Renault',
        'immatriculation'=>str_random(),
        'chevaux'=> 111,
        'valide'=>1,
        'users_id'=>1,
        'contrats_id'=>1,
        ]);
    }
}