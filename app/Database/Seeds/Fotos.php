<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Fotos extends Seeder
{
    public function run()
    {
        $db = db_connect();
        $fTables = $db->table('fotos');

        $fotos = [
            [
                'link' => 'suite/LondonClingon/suiteLC',
                'id_quarto' => 1
            ],

            [
                'link' => 'suite/heavenDoor/suiteHD',
                'id_quarto' => 2
            ],

            [
                'link' => 'casal/FRoom/casalFRoom',
                'id_quarto' => 3
            ],

            [
                'link' => 'casal/LDeluxe/casalLD',
                'id_quarto' => 4
            ],

            [
                'link' => 'solteiro/LHeart/solteiroLH',
                'id_quarto' => 5
            ],

            [
                'link' => 'solteiro/BadC/solteiroBC',
                'id_quarto' => 6
            ],

            [
                'link' => 'familia/ULove/familiaUL',
                'id_quarto' => 7
            ],

            [
                'link' => 'familia/GrassHome/familiaGH',
                'id_quarto' => 8
            ],
        ];

        $fTables->insertBatch($fotos);
    }
}
