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
            array('type'=>'Assurance responsabilité civile'),
            array('type'=>'Assurance automobile'),
            array('type'=>'Assurance moto'),
            array('type'=>'Assurance vie'),
        ));
    }
}
