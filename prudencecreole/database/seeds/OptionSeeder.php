<?php

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('options')->insert(array(
            array('option'=>'Aucun'),
            array('option'=>'1 option'),
            array('option'=>'2 option'),
            array('option'=>'Toute option'),
        ));
    }
}
