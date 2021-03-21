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
                'id_type_diplomes'=>1,
                'libelle_type_diplomes' => 'BAC'
            ),
            2=> array(
                'id_type_diplomes'=>2,
                'libelle_type_diplomes' => 'BEPC'
            )
        ));

    }
}
