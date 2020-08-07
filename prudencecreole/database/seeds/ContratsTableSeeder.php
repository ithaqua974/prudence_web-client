<?php

use Illuminate\Database\Seeder;

class ContratsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contrats')->insert([
            'numero'=>str_random(10),
            'type_id'=>1,
            'montant_id'=>2,
            'user_id'=>3,
            'actif'=>'1',
        ]);
    }
}
