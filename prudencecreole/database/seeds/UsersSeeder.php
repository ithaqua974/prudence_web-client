<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'nom'=>'Emique',
        'prenom'=>'Paul',
        'adresse'=>'5 rue discorde',
        'Num_client'=>str_random(10),
        'email'=>'test@gmail.com',
        'roles_id'=>1,
        'telephone'=>'+262693135791',
        'password'=>bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'nom'=>'Time',
            'prenom'=>'Vincent',
            'adresse'=>'24 rue Porte-feuille',
            'email'=>'test2@gmail.com',
            'roles_id'=>1,
            'telephone'=>'+262693246802',
            'password'=>bcrypt('password'),
            ]);

    }
}
