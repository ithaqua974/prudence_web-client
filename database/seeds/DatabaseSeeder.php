<?php

use App\Contrat_type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UsersSeeder::class,
            ContratsSeeder::class,
            Contrat_type::class,
        ]);
    }
}
