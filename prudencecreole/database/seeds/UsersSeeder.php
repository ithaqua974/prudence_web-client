<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('nom', 'User')->first();
        $role_admin = Role::where('nom', 'admin')->first();
        $user1 = new user;
        $user1->nom = 'Emique';
        $user1->prenom = 'Paul';
        $user1->adresse = '5 rue discorde';
        $user1->Num_client = str_random(10);
        $user1->email = 'test@gmail.com';
        $user1->telephone = '+262693135791 ';
        $user1->password = bcrypt('password');
        $user1->save();
        $user1->role()->attach($role_user);
        $user1->modele = 'Mégane';
        $user1->Marque = 'Renault';
        $user1->immatriculation = str_random();
        $user1->chevaux = 111;
        $user1->nb_piece = 5;
        $user1->surface = 75;
        $user1->propriete = 0;
        $user1->njf_conjoint = 'Age';
        $user1->prenom_conjoint = 'Polys';
        $user1->nb_enfants = 2;

        $user2 = new user;
        $user2->nom = 'Time';
        $user2->prenom = 'Vincent';
        $user2->adresse = '24 rue Porte-feuille';
        $user2->email = 'test2@gmail.com';
        $user2->telephone = '+262693246802';
        $user2->password = bcrypt('password');
        $user2->save();
        $user2->role()->attach($role_admin);
    }
}
