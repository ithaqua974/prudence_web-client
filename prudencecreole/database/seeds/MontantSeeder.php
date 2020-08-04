<?php

use Illuminate\Database\Seeder;

class MontantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('montants')->insert(array(
            array('montant'=>'25,00€'),
            array('montant'=>'26,50€'),
            array('montant'=>'28,50€'),
            array('montant'=>'30,75€'),
            array('montant'=>'7,00€'),
            array('montant'=>'7,65€'),
            array('montant'=>'8,09€'),
            array('montant'=>'8,82€'),
            array('montant'=>'44,75€'),
            array('montant'=>'50,00€'),
            array('montant'=>'51,25€'),
            array('montant'=>'56,90€'),
            array('montant'=>'20,85€'),
            array('montant'=>'37,50€'),
            array('montant'=>'54,15€'),
            array('montant'=>'150,00€'),
            array('montant'=>'983,78€'),
            array('montant'=>'4532,50€'),
            array('montant'=>'10000,00€'),
            array('montant'=>'50000,00€'),
        ));
    }
}
