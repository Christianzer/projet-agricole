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
                'id_table'=>1,
                'libelle_etat' => 'EN ATTENTE'
            ),
            2=> array(
                'id_table'=>2,
                'libelle_etat' => 'ACCEPTER'
            ),
            3=> array(
                'id_table'=>3,
                'libelle_etat' => 'REFUSER'
            )
        ));
    }
}
