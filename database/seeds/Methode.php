<?php

use Illuminate\Database\Seeder;

class Methode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('methode_cultures')->delete();

        \DB::table('methode_cultures')->insert(array(

            1=> array(
                'libelle_methodes_cultures' => 'BIO'
            ),
            2=> array(
                'libelle_methodes_cultures' => 'ENGRAIS'
            ),
            3=> array(
                'libelle_methodes_cultures' => 'IRRIGATION'
            )
        ));
    }
}
