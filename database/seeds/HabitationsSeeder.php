<?php

use Illuminate\Database\Seeder;

class HabitationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitations')->insert([
            'nb_piece' => 5,
            'surface' => 75,
            'propriete' => 0,
            'users_id' => 1,
            'contrats_id' => 1,
            'valide' => 0,
        ]);
    }
}
