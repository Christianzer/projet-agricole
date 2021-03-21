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
                'id_piece'=>1,
                'libelle_piece' => 'CNI'
            ),
            2=> array(
                'id_piece'=>2,
                'libelle_piece' => 'ATTESTATION IDENTITE'
            ),
            3=> array(
                'id_piece'=>3,
                'libelle_piece' => 'PASSEPORT'
            ),
            4=> array(
                'id_piece'=>4,
                'libelle_piece' => 'PERMIS DE CONDUIRE'
            ),

        ));
    }
}
