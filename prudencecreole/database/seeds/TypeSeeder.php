<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert(array(
            array('type'=>'Assurance habitation'),
            array('type'=>'Assurance automobile'),
            array('type'=>'Assurance maladie'),
            array('type'=>'Protection juridique'),
        ));
    }
}
