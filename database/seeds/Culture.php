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
                'libelle_type_cultures' => 'CAFE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2=> array(
                'libelle_type_cultures' => 'CACAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            )
        ));
    }
}
