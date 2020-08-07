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
        'nom'=>'Paul',
        'prenom'=>'émique',
        'adresse'=>'5 rue discorde',
        'client_id'=>str_random(10),
        'email'=>'test@gmail.com',
        'role_id'=>1,
        'telephone'=>'+262693123453',
        'password'=>bcrypt('password'),
        ]);
    }
}
