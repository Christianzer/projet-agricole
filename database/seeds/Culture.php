<?php

use Illuminate\Database\Seeder;

class Culture extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('type_cultures')->delete();

        \DB::table('type_cultures')->insert(array(

            1=> array(
                'id_type_cultures'=>1,
                'libelle_type_cultures' => 'CAFE'
            ),
            2=> array(
                'id_type_cultures'=>2,
                'libelle_type_cultures' => 'CACAO'
            )
        ));
    }
}
