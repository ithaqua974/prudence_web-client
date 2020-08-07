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
            'client_id'=>'51MfUzPbq1',
            'actif'=>'1',
        ]);
        DB::table('contrats')->insert([
            'numero'=>str_random(10),
            'type_id'=>2,
            'montant_id'=>2,
            'client_id'=>'51MfUzPbq1',
            'actif'=>'1',
        ]);
        DB::table('contrats')->insert([
            'numero'=>str_random(10),
            'type_id'=>3,
            'montant_id'=>2,
            'client_id'=>'51MfUzPbq1',
            'actif'=>'1',
        ]);
        DB::table('contrats')->insert([
            'numero'=>str_random(10),
            'type_id'=>4,
            'montant_id'=>2,
            'client_id'=>'51MfUzPbq1',
            'actif'=>'1',
        ]);
    }
}
