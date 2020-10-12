<?php

use Illuminate\Database\Seeder;

class JurySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('jury')->delete();

        \DB::table('jury')->insert(array(

            1=> array(
                'identifiant_jury' => 'christian@gmail.com',
                'mdp_jury' =>'admin',
                'nom_jury'=>'AKA CHRISTIAN DE PACQUES'
            ),
            2=> array(
                'identifiant_jury' => 'lorraine@gmail.com',
                'mdp_jury' =>'admin',
                'nom_jury'=>'KOUASSI LORRAINE'

            ),
            3=> array(
                'identifiant_jury' => 'sanogo@gmail.com',
                'mdp_jury' =>'admin',
                'nom_jury'=>'SANOGO AZIZ'
            )
        ));
    }
}
