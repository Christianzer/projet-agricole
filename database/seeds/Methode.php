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
                'libelle_methodes_cultures' => 'BIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2=> array(
                'libelle_methodes_cultures' => 'ENGRAIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3=> array(
                'libelle_methodes_cultures' => 'IRRIGATION',
                'created_at' => NULL,
                'updated_at' => NULL,
            )
        ));
    }
}
