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
                'id_methodes_cultures'=>1,
                'libelle_methodes_cultures' => 'BIO'
            ),
            2=> array(
                'id_methodes_cultures'=>2,
                'libelle_methodes_cultures' => 'ENGRAIS'
            ),
            3=> array(
                'id_methodes_cultures'=>3,
                'libelle_methodes_cultures' => 'IRRIGATION'
            )
        ));
    }
}
