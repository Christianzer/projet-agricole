<?php

use Illuminate\Database\Seeder;

class types_pieces extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('type_pieces')->delete();

        \DB::table('type_pieces')->insert(array(
            1=> array(
                'libelle_piece' => 'CNI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2=> array(
                'libelle_piece' => 'ATTESTATION IDENTITE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3=> array(
                'libelle_piece' => 'PASSEPORT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4=> array(
                'libelle_piece' => 'PERMIS DE CONDUIRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

        ));
    }
}
