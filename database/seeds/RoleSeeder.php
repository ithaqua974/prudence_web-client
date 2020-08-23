<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->nom = 'User';
        $role_user->description = 'peut inerragir coté client';

        $role_admin = new Role();
        $role_admin->nom = 'admin';
        $role_admin->description = 'peut interragir coté admin';
    }
}
