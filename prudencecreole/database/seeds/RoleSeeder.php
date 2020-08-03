<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert(array(
            array('role'=>'client'),
            array('role'=>'admin'),
        ));
    }
}
