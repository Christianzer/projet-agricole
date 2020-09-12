<?php

use Illuminate\Database\Seeder;

class Etat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('etats')->delete();

        \DB::table('etats')->insert(array(

            1=> array(
                'libelle_etat' => 'EN ATTENTE'
            ),
            2=> array(
                'libelle_etat' => 'ACCEPTER'
            ),
            3=> array(
                'libelle_etat' => 'REFUSER'
            )
        ));
    }
}
