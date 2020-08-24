<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Contrat;


class ContratsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contrat1 = new contrat;
        $contrat1->num_contrat = Str::random(10);
        $contrat1->montant = 800;
        $contrat1->actif = 1;

        $contrat2 = new contrat;
        $contrat2->num_contrat = Str::random(10);
        $contrat2->montant = 104;
        $contrat2->actif = 1;

        $contrat3 = new contrat;
        $contrat3->num_contrat = Str::random(10);
        $contrat3->montant = 35;
        $contrat3->actif = 1;

        $contrat4 = new contrat;
        $contrat4->num_contrat = Str::random(10);
        $contrat4->montant = 14;
        $contrat4->actif = 1;
    }
}
