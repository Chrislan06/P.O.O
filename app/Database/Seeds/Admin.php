<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Seeder;
use DateTime;

class Admin extends Seeder
{
    public function run()
    {
        $dataAtual = new DateTime();
        $db = db_connect();
        $data =[
            'nome' => 'Admin',
            'email' => 'admin@admin.com',
            'senha' => password_hash('admin.admin',PASSWORD_ARGON2ID),
            'criado_em' => $dataAtual->format('Y-m-d H:i:s'),
            'atualizado_em' => $dataAtual->format('Y-m-d H:i:s'),
        ];

        $db->query('INSERT INTO admins(nome,email,senha) VALUES(:nome:,:email:,:senha:)',$data);
    }
}
