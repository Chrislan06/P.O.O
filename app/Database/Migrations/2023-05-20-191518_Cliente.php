<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Cliente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'rg' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'data_nascimento' => [
                'type' => 'TIMESTAMP',
                'null' =>  false,
            ],
            'criado_em' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
            'atualizado_em' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],            
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');
    }
}
