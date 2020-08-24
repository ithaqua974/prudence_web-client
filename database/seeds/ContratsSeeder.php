<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Contrat;
use illuminate\Database\Eloquent\Model;

class ContratsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Contrat::create([
            'Num_contrat' => Str::random(10),
            'montant' => 104,
            'actif' => 1,

        ]);
        App\Contrat::create([
            'Num_contrat' => Str::random(10),
            'montant' => 35,
            'actif' => 1,
        ]);
        App\Contrat::create([
            'Num_contrat' => Str::random(10),
            'montant' => 14,
            'actif' => 1,
        ]);
    }
}
