<?php

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
        $this->call(RoleSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ContratsTableSeeder::class);
        $this->call(AutosSeeder::class);
        $this->call(HabitationsSeeder::class);
        $this->call(SantesSeeder::class);
    }
}
