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
            'num_contrat'=>str_random(10),
            'type'=>'auto',
            'montant'=>800,
            'client_id'=>'51MfUzPbq1',
            'actif'=>1,
            'users_id'=>1,
        ]);
        DB::table('contrats')->insert([
            'num_contrat'=>str_random(10),
            'type'=>'habitation',
            'montant'=>104,
            'client_id'=>'51MfUzPbq1',
            'actif'=>1,
            'users_id'=>1,
        ]);
        DB::table('contrats')->insert([
            'num_contrat'=>str_random(10),
            'type'=>'Santé',
            'montant'=>35,
            'client_id'=>'51MfUzPbq1',
            'actif'=>1,
            'users_id'=>1,
        ]);
        DB::table('contrats')->insert([
            'num_contrat'=>str_random(10),
            'type'=>'protection juridique',
            'montant'=>14,
            'client_id'=>'51MfUzPbq1',
            'actif'=>1,
            'users_id'=>1,
        ]);
    }
}
