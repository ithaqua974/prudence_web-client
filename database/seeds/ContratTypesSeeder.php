<?php

use Illuminate\Database\Seeder;
use App\Contrat_type;

class ContratTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Contrat_type::create([
            'nom' => 'auto',

        ]);
    }
}
