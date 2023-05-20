<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $db = db_connect();
        $data =[
            'nome' => 'Admin',
            'email' => 'admin@admin.com',
            'senha' => password_hash('admin',PASSWORD_ARGON2ID),
        ];

        $db->query('INSERT INTO admins(nome,email,senha) VALUES(:nome:,:email:,:senha:)',$data);
    }
}
