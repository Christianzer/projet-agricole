<?php

use Illuminate\Database\Seeder;

class types_diplomes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('type_diplomes')->delete();

        \DB::table('type_diplomes')->insert(array(

            1=> array(
                'libelle_type_diplomes' => 'BAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2=> array(
                'libelle_type_diplomes' => 'BEPC',
                'created_at' => NULL,
                'updated_at' => NULL,
            )
        ));

    }
}
