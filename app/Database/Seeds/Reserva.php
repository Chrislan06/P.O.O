<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use DateTime;

class Reserva extends Seeder
{
    public function run()
    {
        $db = db_connect();
        $reserva = $db->table('reservas');
        for($i = 1; $i <= 8; $i++){
            $dataInicio = new DateTime('2023-'. rand(1,12).'-'. rand(1,28));
            $dataFim = new DateTime('2023-'. rand(1,12).'-'. rand(1,28));
            $data = [
                'id_quarto' => $i,
                'data_inicio' => $dataInicio->format('Y-m-d'),
                'data_fim' => $dataFim->format('Y-m-d'),
            ];
            $reserva->insert($data);
        }
    }
}
